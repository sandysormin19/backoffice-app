<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Fit&Thrive</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #00c6ff, #0072ff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .register-container {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        .register-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .register-container .input-group {
            margin-bottom: 20px;
        }

        .register-container .input-group label {
            display: block;
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
            text-align: left;
        }

        .register-container .input-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            transition: all 0.3s ease;
        }

        .register-container .input-group input:focus {
            border-color: #0072ff;
        }

        .register-container button {
            width: 100%;
            padding: 12px;
            background-color: #0072ff;
            color: white;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .register-container button:hover {
            background-color: #005bb5;
        }

        .register-container .login-link {
            margin-top: 15px;
            font-size: 14px;
        }

        .register-container .login-link a {
            color: #0072ff;
            text-decoration: none;
        }

        .register-container .login-link a:hover {
            text-decoration: underline;
        }

        /* Animasi fade-in */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .register-container {
            animation: fadeIn 0.8s ease;
        }

        /* Responsif untuk mobile */
        @media (max-width: 480px) {
            .register-container {
                padding: 20px;
            }

            .register-container h2 {
                font-size: 20px;
            }

            .register-container button {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

    <div class="register-container">
        <h2>Create Your Account</h2>
        <form action="dashboard.html" method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <button type="submit">Register</button>
            <div class="login-link">
                Already have an account? <a href="{{ route('login') }}">Login here</a>
            </div>
        </form>
    </div>

</body>
</html>
