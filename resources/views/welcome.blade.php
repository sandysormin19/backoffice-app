<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fit&Thrive</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<!-- Tambahkan ke bagian <head> -->
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
    
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>    
<body>
    <!-- Header Section -->
    <header id="navbar">
        <div class="logo">Fit&Thrive</div>
        <nav>
            <ul>
                <li><a href="../index.html#home">Home</a></li>
                <li><a href="../index.html#about">About</a></li>
                <li><a href="../index.html#features">Features</a></li>
                <li><a href="../index.html#gallery">Gallery</a></li>
                <li><a href="../index.html#goals">Goals</a></li>
                <li><a href="{{ route('login') }}" class="btn-login">Login</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Section -->
    <section id="home" class="hero-section">
        <div class="hero-content">
            <h1>Welcome to Fit&Thrive</h1>
            <p>A Smart Way to Track Your Body Composition Insights and Progress.</p>
            <a href="{{ route('register') }}" class="cta-button">Get Started</a> <!-- Link ke halaman register -->
        </div>
    </section>
    <section id="about" class="about-section">
        <div class="about-content">
            <h2 class="section-title">About Fit&Thrive</h2>
            <p>Fit&Thrive is more than just a fitness app. We’re a community of health-conscious individuals who are dedicated to helping each other become the best versions of ourselves, both physically and mentally.</p>
            <p>Our mission is to provide powerful tools and resources that empower you to track your fitness journey, analyze your body composition, and achieve your wellness goals with ease. From meal planning to workout tracking, we cover every aspect of your healthy lifestyle.</p>
            <p>Join us, and let’s thrive together!</p>
            <a href="https://wa.me/62801294772854" class="cta-button">Contact Us</a>
        </div>        
</section>

   <!-- Features Section -->
   <section id="features" class="features-section">
    <h2 class="section-title">Our Features</h2>
    <div class="features-container">
        <!-- Feature 1 -->
         <a href="{{ route('bmi-calculator') }}" class="feature">
            <img src="{{ asset('image/bmi.jpg')}}" alt="bmi" class="feature-icon-bmi"> <!-- Ganti dengan URL gambar/icon -->
            <h3>Body Mass Index (BMI) Calculator </h3>
            <p><strong>Curious if your weight is in the healthy range?</strong> Try our quick BMI calculator to get instant results and take control of your health today!</p>
        </a>
       
        <!-- Feature 2 -->
        <a href="{{ route('mealplanner') }}" class="feature">
            <img src="{{ asset('image/healthymeal.jpeg') }}" alt="Meal Prep" class="feature-icon-meal"> <!-- Ganti dengan URL gambar/icon -->
            <h3>Mealplanner: Plan Your Meal!</h3>
            <p><strong>Tired of last-minute meal decisions?</strong> Our Meal Planner makes it easy to create delicious and nutritious meals for the entire week—start your culinary journey today!</p>
        </a>
        <!-- Feature 3 -->
        <a href="{{ route('exercise') }}" class="feature">
            <img src="{{ asset('image/gym.jpg') }}" alt="Personalized Workouts" class="feature-icon"> <!-- Ganti dengan URL gambar/icon -->
            <h3>Exercise</h3>
            <p><strong>Want to elevate your fitness journey?</strong> Experience our personalized workouts designed specifically for you, ensuring every session helps you reach your goals!</p>
        </a>
        <!-- Feature 4 -->
        <a href="{{ route('health') }}" class="feature">
            <img src="{{ asset('image/treesep.jpg') }}" alt="Progress Tracking" class="feature-icon"> <!-- Ganti dengan URL gambar/icon -->
            <h3>Learn More About Health and Fitness</h3>
            <p><strong>Your Journey to Wellness Starts Here!</strong> Discover insightful articles that guide you to a healthier and fitter lifestyle!</p>
        </a>
    </div>
</section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery-section">
        <h2 class="section-title">Gallery</h2>
        <div class="gallery-container">
            <!-- Gambar 1 -->
            <div class="gallery-item">
                <img src="image/image1.jpg" alt="Gallery Image 1">
            </div>
            <!-- Gambar 2 -->
            <div class="gallery-item">
                <img src="image/image2.jpg" alt="Gallery Image 2">
            </div>
            <!-- Gambar 3 -->
            <div class="gallery-item">
                <img src="image/image3.jpg" alt="Gallery Image 3">
            </div>
            <!-- Gambar 4 -->
            <div class="gallery-item">
                <img src="image/image4.jpg" alt="Gallery Image 4">
            </div>
            <!-- Gambar 5 -->
            <div class="gallery-item">
                <img src="image/image5.jpg" alt="Gallery Image 5">
            </div>
            <!-- Gambar 6 -->
            <div class="gallery-item">
                <img src="image/image6.jpg" alt="Gallery Image 6">
            </div>
            <!-- Gambar 7 -->
            <div class="gallery-item">
                <img src="image/image7.jpg" alt="Gallery Image 7">
            </div>
            <!-- Gambar 8 -->
            <div class="gallery-item">
                <img src="image/image8.jpg" alt="Gallery Image 8">
            </div>
        </div>
    </section>

    <!-- Goals Section -->
    <section id="goals" class="goals-section">
        <h2 class="section-title">Our Goals</h2>
        <div class="goals-container">
            <!-- Goal 1: Weight Loss -->
            <div class="goal">
                <h3>Weight Loss</h3>
                <p>Our weight loss goal focuses on creating a sustainable lifestyle through healthy eating and regular exercise. We'll guide you in setting realistic targets and tracking your progress.</p>
            </div>
            <!-- Goal 2: Strength -->
            <div class="goal">
                <h3>Strength</h3>
                <p>Building strength is essential for overall fitness. Our program includes customized strength training routines that adapt to your level, ensuring steady progress and avoiding plateaus.</p>
            </div>
            <!-- Goal 3: Abs & Core -->
            <div class="goal">
                <h3>Abs & Core</h3>
                <p>A strong core improves stability and balance. Our targeted core workouts will help you achieve that toned midsection while enhancing your performance in all physical activities.</p>
            </div>
            <!-- Goal 4: Overall Health -->
            <div class="goal">
                <h3>Overall Health</h3>
                <p>Prioritizing overall health means focusing on mental, physical, and emotional well-being. We provide resources to help you maintain a balanced lifestyle that fosters happiness and health.</p>
            </div>
        </div>
    </section>
    <!-- Footer -->
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
</body>
</html>
