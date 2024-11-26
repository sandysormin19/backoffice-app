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
            background-color: #b3acac; /* Latar belakang halaman */
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
            background-color: #0b0d0f; /* Warna latar tautan */
            color: white; /* Warna teks tautan */
            padding: 10px 15px;
            margin: 5px;
            border-radius: 5px; /* Sudut membulat pada tautan */
            text-decoration: none;
            transition: background-color 0.3s ease; /* Animasi transisi */
        }

        .category-links a:hover {
            background-color: #4b0fe4; /* Warna latar saat hover */
        }
    </style>
</head>
<body>

    <!-- Header Section (Tetap Sama) -->
    <header id="navbar">
        <div class="logo">Fit&Thrive</div>
    </header>
    

      <!-- Features Section -->
      <section id="features1" class="features-section1">
        <h2 class="section1-title"align=center>Article</h2><p></p>
        <div class="features-container">
            <!-- Feature 1 -->
             <a href="https://www.health.harvard.edu/topics/exercise-and-fitness" class="feature">
                <img src="image/mental.jpg" alt="bmi" class="feature-icon-bmi"> <!-- Ganti dengan URL gambar/icon -->
                <h3> Exercise & Fitness </h3>
                <p><strong>The Mental Health Benefits of Exercise. What are the mental health benefits of exercise?</strong> </p>
            </a>
             <!-- Feature 1 -->
             <a href="https://www.helpguide.org/wellness/fitness/what-are-the-best-exercises-for-me" class="feature">
                <img src="image/weight.jpg" alt="bmi" class="feature-icon-bmi"> <!-- Ganti dengan URL gambar/icon -->
                <h3>Workouts & Activities </h3>
                <p><strong>Best Exercises for Health and Weight Loss.What are the best exercises for me?</strong> </p>
            </a>
             <!-- Feature 1 -->
             <a href="https://www.helpguide.org/wellness/fitness/whats-the-best-exercise-plan-for-me" class="feature">
                <img src="image/plan.jpg" alt="bmi" class="feature-icon-bmi"> <!-- Ganti dengan URL gambar/icon -->
                <h3>Exercise & Fitness </h3>
                <p><strong>How to Build an Exercise Plan.What type of exercise should you do?</strong> </p>
            </a>
             <!-- Feature 1 -->
             <a href="https://www.everydayhealth.com/fitness/guide/" class="feature">
                <img src="image/jogging.jpeg" alt="bmi" class="feature-icon-bmi"> <!-- Ganti dengan URL gambar/icon -->
                <h3> Workouts & Activities</h3>
                <p><strong>Fitness and Exercise: Health Benefits, How to Get Started, and How to Get Better</strong> </p>
            </a>
             <!-- Feature 1 -->
             <a href="https://www.muscleandstrength.com/articles/build-muscle-without-gym-equipment" class="feature">
                <img src="image/push.jpg" alt="bmi" class="feature-icon-bmi"> <!-- Ganti dengan URL gambar/icon -->
                <h3> Exercise & Fitness</h3>
                <p><strong>Home Workout and Fitness Tips: Exercising without the Gym.The importance of staying active</strong> </p>
            </a>
             <!-- Feature 1 -->
             <a href="https://www.helpguide.org/mental-health/wellbeing/how-to-break-bad-habits-and-change-negative-behaviors" class="feature">
                <img src="image/habbitt.jpg" alt="bmi" class="feature-icon-bmi"> <!-- Ganti dengan URL gambar/icon -->
                <h3>Well-being & Happiness</h3>
                <p><strong>How to Break Bad Habits.Tips for Changing Negative Behaviors</strong> </p>
            </a>
           
            
        </div>
    </section>

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

    <script src="{{ asset('js/script.js')}}"></script>
</body>
</html>