<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Track Anywhere - Fit&Thrive</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9f9f9; /* Latar belakang halaman */
            margin: 0;
            padding: 0;
        }

        .track-everywhere-section {
            max-width: 100%;
            margin: 0 auto;
            padding: 40px 20px;
            text-align: center;
            background-color: #ffffff; /* Background putih */
            border-radius: 10px; /* Sudut membulat */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan */
        }

        .main-title {
            font-size: 2.5em;
            margin-bottom: 20px;
            font-weight: bold;
            color: black;
        }

        .main-image {
            width: 50%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px; /* Spasi di bawah gambar */
        }

        .description {
            font-size: 1.2em;
            color: #555;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .category-links {
            margin-top: 30px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center; /* Pusatkan tautan */
        }

        .category-links a {
            background-color: #0073e6; /* Warna latar tautan */
            color: white; /* Warna teks tautan */
            padding: 10px 15px;
            margin: 5px;
            border-radius: 5px; /* Sudut membulat pada tautan */
            text-decoration: none;
            transition: background-color 0.3s ease; /* Animasi transisi */
        }

        .category-links a:hover {
            background-color: #005bb5; /* Warna latar saat hover */
        }
    </style>
</head>
<body>

    <!-- Header Section (Tetap Sama) -->
    <header id="navbar">
        <div class="logo">Fit&Thrive</div>
        <nav>
            <ul>
                <li><a href="index.html#home">Home</a></li>
                <li><a href="index.html#about">About</a></li>
                <li><a href="index.html#features">Features</a></li>
                <li><a href="index.html#gallery">Gallery</a></li>
                <li><a href="index.html#goals">Goals</a></li>
                <li><a href="login.html" class="btn-login">Login</a></li>
            </ul>
        </nav>
    </header>

    <!-- Track Anywhere Detail Section -->
    <section class="track-everywhere-section">
        <h2 class="main-title">Track Anywhere - Fit&Thrive</h2>
        <img src="image/barbel.jpg" alt="Track Anywhere" class="main-image">
        <p class="description">
            With the Fit&Thrive App, you can monitor and analyze your body composition results anytime, anywhere. This feature allows you to keep track of your progress and stay motivated on your fitness journey. Whether you're at home, in the gym, or on the go, our app provides you with the tools you need to maintain a healthy lifestyle.
        </p>
        <p class="description">
            Key features include:
            <ul>
                <li>Real-time body composition tracking</li>
                <li>Personalized fitness goals</li>
                <li>Detailed progress reports</li>
                <li>Community support and motivation</li>
            </ul>
        </p>

        <!-- Category Links -->
        <div class="category-links">
            <a href="#">Body Composition</a>
            <a href="#">Heart Rate</a>
            <a href="#">Calories Burned</a>
            <a href="#">Sleep Monitoring</a>
            <a href="#">Workout History</a>
            <a href="#">Nutritional Tracking</a>
        </div>
    </section>

    <!-- Footer Section (Tetap Sama) -->
    <footer>
        <div class="footer-content">
            <h3>Fit&Thrive</h3>
            <p>Your ultimate guide to health and fitness, helping you thrive both mentally and physically.</p>
            <ul class="socials">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Fit&Thrive. All rights reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>