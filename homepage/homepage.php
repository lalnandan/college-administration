<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Administrative System</title>
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="logo">
            <img src="college profile.jpg" alt="College Logo">
            <h1>Rajiv Gandhi College</h1>
        </div>
        <nav>
            <ul>
                <li><a href="/college/homepage/index1.php" class="active">Home</a></li>
                <li><a href="/college/aboutus/aboutus.php">About</a></li>
                <li><a href="/college/homepage/homepageservices.php">Services</a></li>
                <li><a href="/college/contactus/contactus.php">Contact</a></li>
                <li><a href="/college/studentportal/studentportallogin.php" class="btn-login">Login</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <style>
    .hero {
        background: linear-gradient(90deg, rgba(0, 150, 136, 0.8), rgba(76, 175, 80, 0.8)), 
                    url('https://source.unsplash.com/1600x900/?college,campus') center/cover no-repeat;
        color: white;
        text-align: center;
        padding: 100px 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .hero-content {
        max-width: 700px;
        text-align: center;
        animation: fadeIn 1.5s ease-in-out;
    }

    .hero h1 {
        font-size: 40px;
        font-weight: 700;
        margin-bottom: 15px;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
    }

    .hero p {
        font-size: 18px;
        margin-bottom: 20px;
        font-weight: 300;
        line-height: 1.6;
    }

    .btn-explore {
        display: inline-block;
        background: #ff9800;
        color: white;
        padding: 12px 25px;
        font-size: 18px;
        font-weight: 600;
        text-decoration: none;
        border-radius: 6px;
        transition: 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .btn-explore:hover {
        background: #e68900;
        transform: scale(1.05);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    }

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
</style>

<section class="hero">
    <div class="hero-content">
        <h1>Welcome to Rajiv Gandhi College</h1>
        <p>Empowering students with quality education and advanced administrative systems.</p>
        <a href="/college/courseoffered/courses.php" class="btn-explore">Explore More</a>
    </div>
</section>

    <!-- Features Section -->
    <section class="features">
        <h2>Our Features</h2>
        <div class="feature-cards">
            <div class="card">
                <i class="fas fa-users"></i>
                <h3>Student Management</h3>
                <p>Efficiently manage student records, attendance, and performance.</p>
            </div>
            <div class="card">
                <i class="fas fa-chalkboard-teacher"></i>
                <h3>Faculty Management</h3>
                <p>Streamline faculty information, schedules, and evaluations.</p>
            </div>
            <div class="card">
                <i class="fas fa-book"></i>
                <h3>Course Management</h3>
                <p>Organize and manage courses, syllabi, and academic resources.</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="about-content">
            <h2>About Us</h2>
            <p>Rajiv Gandhi College is a premier institution dedicated to providing quality education in the fields of IT, Management, and Journalism. Our administrative system is designed to enhance efficiency and transparency in college operations.</p>
            <a href="college profile.jpg" class="btn-learn-more">Learn More</a>
        </div>
        <div class="about-image">
            <img src="college profile.jpg" alt="college building">
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <h2>What Our Students Say</h2>
        <div class="testimonial-cards">
            <div class="card">
                <img src="images/student1.jpg" alt="Lalnandan Yetalkar">
                <p>"The administrative system made it so easy to track my attendance and grades. Highly recommended!"</p>
                <h4>- John Doe</h4>
            </div>
            <div class="card">
                <img src="images/student2.jpg" alt="snehalata kulkarni">
                <p>"The faculty management system is a game-changer. It saves so much time and effort."</p>
                <h4>- Jane Smith</h4>
            </div>
            <div class="card">
                <img src="images/student3.jpg" alt="Student 3">
                <p>"I love how organized the course management system is. It helps me stay on top of my studies."</p>
                <h4>- Alice Johnson</h4>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="footer-content">
            <div class="footer-logo">
                <img src="college profile.jpg" alt="College Logo">
                <h3>Rajiv Gandhi College</h3>
            </div>
            <div class="footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="/college/homepage/index1.php">Home</a></li>
                    <li><a href="/college/aboutus/aboutus.php">About</a></li>
                    <li><a href="/college/homepage/homepageservices.php">Services</a></li>
                    <li><a href="/college/contactus/contactus.php">Contact</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <h4>Follow Us</h4>
                <a href="https://www.facebook.com/profile.php?id=100016673254935"><i class="fab fa-facebook"></i></a>
                <a href="https://x.com/lvylalnandan"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/creeper__of_love?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/lalnandan-yetalkar-069173320/"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2023 Rajiv Gandhi College. All rights reserved. Design by :- Snehalata kulkarni & Lalnandan Yetalkar</p>
        </div>
    </footer>

    <!-- JavaScript for Interactivity -->
    <script src="homepage.js"></script>
</body>
</html>