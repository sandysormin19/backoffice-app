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
            background-color: #b3acac;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>

    <!-- Header Section (Tetap Sama) -->
    <header id="navbar">
        <div class="logo">Fit&Thrive</div>
        <nav>
            <ul>
                <li><a href="../index.html#home">Home</a></li>
                <li><a href="../index.html#about">About</a></li>
                <li><a href="../index.html#features">Features</a></li>
                <li><a href="../index.html#gallery">Gallery</a></li>
                <li><a href="../index.html#goals">Goals</a></li>
                <li><a href="login.html" class="btn-login">Login</a></li>
            </ul>
        </nav>
    </header>
    

    <!-- Features Section -->
    <section id="features1" class="features-section1">
        <div class="features-container">

            <a href="#" class="feature" data-images='["image/abs_exercise/crunch.gif", "image/abs_exercise/bicyclecrunch.gif", "image/abs_exercise/pulse.gif"]'>
                <img src="image/abs.jpg" alt="bmi" class="feature-icon-bmi">
                <h3>Abs Exercise</h3>
                <p><strong>These are our choice of the ten best abs exercises.</strong> Try our abs exercise to get instant results and take control of your health today!</p>
            </a>

             <a href="#" class="feature" data-images='["image/chest_exercise/pushup.gif", "image/chest_exercise/dip.gif", "image/chest_exercise/bench.gif"]'>
                <img src="image/chest.jpg" alt="bmi" class="feature-icon-bmi"> <!-- Ganti dengan URL gambar/icon -->
                <h3> Chest Exercise </h3>
                <p><strong>These are our choice of the ten best chest exercises</strong> Try our chest exercise to get instant results and take control of your health today!</p>
            </a>

             <a href="#" class="feature" data-images='["image/leg_exercise/squat.gif", "image/leg_exercise/lunges.gif", "image/leg_exercise/sidelunges.gif"]'>
                <img src="image/leg.jpeg" alt="bmi" class="feature-icon-bmi"> <!-- Ganti dengan URL gambar/icon -->
                <h3>Leg Exercise </h3>
                <p><strong>These are our choice of the ten best leg exercises</strong> Try our leg exercise to get instant results and take control of your health today!</p>
            </a>

             <a href="#" class="feature" data-images='["image/arm_exercise/curl.gif", "image/arm_exercise/curls.gif", "image/arm_exercise/raise.gif"]'>
                <img src="image/arm.jpg" alt="bmi" class="feature-icon-bmi"> <!-- Ganti dengan URL gambar/icon -->
                <h3>Arm Exercise </h3>
                <p><strong>These are our choice of the ten best arm exercises</strong> Try our arm exercise to get instant results and take control of your health today!</p>
            </a>

             <a href="#" class="feature" data-images='["image/cardio_exercise/squatjum.gif", "image/cardio_exercise/jacks.gif", "image/cardio_exercise/jam.gif"]'>
                <img src="image/cardio.jpeg" alt="bmi" class="feature-icon-bmi"> <!-- Ganti dengan URL gambar/icon -->
                <h3>Cardio Exercise </h3>
                <p><strong>These are our choice of the ten best cardio exercises</strong> Try our cardio exercise to get instant results and take control of your health today!</p>
            </a>

             <a href="#" class="feature" data-images='["image/fullbody_exercise/pistol.gif", "image/fullbody_exercise/burpss.gif", "image/fullbody_exercise/all.gif"]'>
                <img src="image/fullbody.jpg" alt="bmi" class="feature-icon-bmi"> <!-- Ganti dengan URL gambar/icon -->
                <h3>Full Body Exercise </h3>
                <p><strong>These are our choice of the ten best exercises</strong> Try our exercise to get instant results and take control of your health today!</p>
            </a>
           
            
        </div>

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

    <div id="popupModal" class="popup-modal">
        <div class="popup-content">
            <span class="close">&times;</span>
            <div class="slider">
                <div class="slides">
                    <img id="popupImage1" src="" alt="Exercise Image" class="popup-image" style="display:none;">
                    <img id="popupImage2" src="" alt="Exercise Image" class="popup-image" style="display:none;">
                    <img id="popupImage3" src="" alt="Exercise Image" class="popup-image" style="display:none;">
                </div>
            </div>
            <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
            <button class="next" onclick="changeSlide(1)">&#10095;</button>
        </div>
    </div>

    <script src="{{ asset('js/script.js')}}"></script>
</body>
</html>

