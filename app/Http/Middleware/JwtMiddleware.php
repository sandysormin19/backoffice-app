<?php

namespace App\Http\Middleware;

use Closure;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Http\Request;
use Exception;

class JwtMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->bearerToken(); // Mengambil token dari header Authorization

        if (!$token) {
            return response()->json(['error' => 'Token not provided'], 401);
        }

        try {
            // Verifikasi token
            $decoded = JWT::decode($token, new Key(env('JWT_SECRET'), 'HS256'));
            $request->auth = $decoded; // Menyimpan data token yang didekode
        } catch (Exception $e) {
            return response()->json(['error' => 'Invalid or expired token: ' . $e->getMessage()], 401);
        }

        return $next($request);
    }
}
