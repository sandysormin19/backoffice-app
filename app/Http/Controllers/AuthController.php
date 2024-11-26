<?php

namespace App\Http\Controllers;

use ErrorException;

use App\Models\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class AuthController extends Controller
{
    private $jwtSecret = "sandigapernahganti"; // Ganti dengan kunci rahasia Anda
    private $jwtTTL = 3600; // Waktu kedaluwarsa token dalam detik (1 jam)

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autentikasi berhasil
            $user = Auth::user();

            // Membuat JWT
            $payload = [
                'iss' => 'your-app-name', // Issuer
                'sub' => $user->id, // Subject (User ID)
                'iat' => time(), // Issued at
                'exp' => time() + $this->jwtTTL, // Expiration time
            ];

            $token = JWT::encode($payload, $this->jwtSecret, 'HS256');

            return response()->json([
                'status' => 'success',
                'message' => 'Login successful',
                'token' => $token,
                'user' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                ],
            ], 200);
        }

        // Autentikasi gagal
        return response()->json([
            'status' => 'error',
            'message' => 'Invalid email or password',
        ], 401);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        try
        {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Registration successful',
                'user' => $user,
            ], 201);
        } catch (ErrorException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Registration unsuccessful',
                'user' => $user,
            ], 401);
        }
    }
}
