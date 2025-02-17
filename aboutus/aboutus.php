<?php
// Dynamic content (can be fetched from a database in a real-world scenario)
$collegeName = "Rajiv Gandhi College of Computer Science & Management";
$establishedYear = "2001";
$location = "Nanded, Maharashtra";
$mission = "To provide quality education and foster holistic development of students.";
$vision = "To be a leading institution in the fields of IT, Management, and Journalism.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - <?php echo $collegeName; ?></title>
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            line-height: 1.6;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #003366;
            color: #fff;
        }

        header .logo {
            display: flex;
            align-items: center;
        }

        header .logo img {
            height: 50px;
            margin-right: 10px;
        }

        header nav ul {
            list-style: none;
            display: flex;
        }

        header nav ul li {
            margin: 0 15px;
        }

        header nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        header nav ul li a.active {
            color: #ffcc00;
        }

        .hero {
            background: url('https://via.placeholder.com/1500x500') no-repeat center center/cover;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
        }

        .hero-content h2 {
            font-size: 3rem;
            margin: 0;
        }

        .section {
            padding: 50px;
        }

        .section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #003366;
        }

        .section p {
            font-size: 1.1rem;
            color: #333;
        }

        .about-content, .mission-vision, .infrastructure, .academics, .facilities, .achievements, .alumni {
            margin-bottom: 40px;
        }

        .mission-vision {
            display: flex;
            gap: 20px;
        }

        .mission, .vision {
            flex: 1;
            background: #f4f4f4;
            padding: 20px;
            border-radius: 10px;
        }

        .infrastructure .infra-cards, .facilities .facility-cards, .achievements .achievement-cards {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            flex: 1 1 calc(33.333% - 40px);
            text-align: center;
        }

        .card i {
            font-size: 2rem;
            color: #003366;
            margin-bottom: 10px;
        }

        footer {
            background-color: #003366;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        footer .social-links a {
            color: #fff;
            margin: 0 10px;
            font-size: 1.2rem;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="logo">
            <img src="/college/homepage/college profile.jpg" alt="College Logo">
            <h1><?php echo $collegeName; ?></h1>
        </div>
        <nav>
            <ul>
                <li><a href="/college/homepage/index1.php">Home</a></li>
                <li><a href="/college/aboutus/aboutus.php" class="active">About Us</a></li>
                <li><a href="/college/courseoffered/courses.php">Courses</a></li>
                <li><a href="/college/contactus/contactus.php">Contact</a></li>
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


    <!-- About Section -->
    <section class="section about-content">
        <h2>Our Story</h2>
        <p>Established in <?php echo $establishedYear; ?>, <?php echo $collegeName; ?> has been a beacon of knowledge and innovation in <?php echo $location; ?>. We are committed to providing quality education and fostering the holistic development of our students.</p>
        <p>Our college is recognized by the Government of Maharashtra and affiliated with Swami Ramanand Teerth Marathwada University, Nanded. Over the years, we have grown into one of the fastest-developing institutions in the fields of Information Technology, Management, and Journalism.</p>
    </section>

    <!-- Mission and Vision Section -->
    <section class="section mission-vision">
        <div class="mission">
            <h3>Our Mission</h3>
            <p><?php echo $mission; ?></p>
        </div>
        <div class="vision">
            <h3>Our Vision</h3>
            <p><?php echo $vision; ?></p>
        </div>
    </section>

    <!-- Infrastructure Section -->
    <section class="section infrastructure">
        <h2>Infrastructure</h2>
        <p>Our college boasts state-of-the-art infrastructure designed to provide a conducive learning environment:</p>
        <div class="infra-cards">
            <div class="card">
                <i class="fas fa-building"></i>
                <h4>Modern Classrooms</h4>
                <p>Spacious and well-equipped classrooms with audio-visual aids for interactive learning.</p>
            </div>
            <div class="card">
                <i class="fas fa-laptop"></i>
                <h4>Advanced Labs</h4>
                <p>Four computer labs with the latest configurations and high-speed internet connectivity.</p>
            </div>
            <div class="card">
                <i class="fas fa-book"></i>
                <h4>Library</h4>
                <p>A well-stocked library with over 3,000 books and journals in IT, Management, and Journalism.</p>
            </div>
        </div>
    </section>

    <!-- Academics Section -->
    <section class="section academics">
        <h2>Academics</h2>
        <p>We offer a wide range of programs in IT, Management, and Journalism. Our academic framework includes:</p>
        <ul>
            <li>Unit tests conducted monthly to assess student progress.</li>
            <li>Pre-annual exams in March/April to prepare students for final exams.</li>
            <li>Strict attendance system with daily subject-wise attendance.</li>
            <li>Annual teaching plans prepared at the beginning of the academic year.</li>
        </ul>
    </section>

    <!-- Facilities Section -->
    <section class="section facilities">
        <h2>Facilities</h2>
        <p>Our college provides a range of facilities to support student growth and development:</p>
        <div class="facility-cards">
            <div class="card">
                <i class="fas fa-wifi"></i>
                <h4>Wi-Fi Campus</h4>
                <p>High-speed internet connectivity across the campus.</p>
            </div>
            <div class="card">
                <i class="fas fa-users"></i>
                <h4>Sports Facilities</h4>
                <p>Indoor and outdoor sports facilities for physical fitness.</p>
            </div>
            <div class="card">
                <i class="fas fa-graduation-cap"></i>
                <h4>Career Guidance</h4>
                <p>Dedicated career guidance cell for placement and counseling.</p>
            </div>
        </div>
    </section>

    <!-- Achievements Section -->
    <section class="section achievements">
        <h2>Our Achievements</h2>
        <div class="achievement-cards">
            <div class="card">
                <i class="fas fa-trophy"></i>
                <h4>Best College Award</h4>
                <p>Recognized as the best college in the region for academic excellence.</p>
            </div>
            <div class="card">
                <i class="fas fa-users"></i>
                <h4>5000+ Alumni</h4>
                <p>Our alumni are making a mark in various industries worldwide.</p>
            </div>
            <div class="card">
                <i class="fas fa-book"></i>
                <h4>3000+ Books</h4>
                <p>Our library is stocked with a vast collection of books and journals.</p>
            </div>
        </div>
    </section>

    <!-- Alumni Section -->
    <section class="section alumni">
        <h2>Alumni Network</h2>
        <p>Our alumni are our pride. We organize annual alumni meets to reconnect with former students and provide mentorship to current students.</p>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="footer-content">
            <p>&copy; <?php echo date("Y"); ?> <?php echo $collegeName; ?>. All rights reserved. Design by :- Snehalata kulkarni & Lalnandan Yetalkar</p>
            <div class="social-links">
            <a href="https://www.facebook.com/profile.php?id=100016673254935"><i class="fab fa-facebook"></i></a>
                <a href="https://x.com/lvylalnandan"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/creeper__of_love?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/lalnandan-yetalkar-069173320/"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </footer>

    <!-- JavaScript for Interactivity -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const cards = document.querySelectorAll(".card");
            cards.forEach((card, index) => {
                card.style.opacity = "0";
                card.style.transform = "translateY(20px)";
                setTimeout(() => {
                    card.style.transition = "opacity 0.5s, transform 0.5s";
                    card.style.opacity = "1";
                    card.style.transform = "translateY(0)";
                }, index * 200);
            });
        });
    </script>
</body>
</html>