<?php
// Start session to handle user interactions if needed (optional)
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placement Services - University</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Add external links or Bootstrap for responsiveness -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Styles */
        body {
            font-family: 'Arial', sans-serif;
            color: #333;
        }

        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: background-color 0.3s ease;
        }

        .navbar.bg-light {
            background-color: rgba(255, 255, 255, 0.8) !important;
        }

        .navbar.scrolled {
            background-color: #003366 !important;
        }

        .navbar-nav .nav-link {
            padding: 10px 20px;
        }

        .hero {
            background-color: #003366;
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
        }

        .hero p {
            font-size: 1.2rem;
        }

        .container {
            padding: 40px 15px;
        }

        section {
            padding: 40px 0;
            margin-bottom: 40px;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #003366;
        }

        footer {
            background-color: #003366;
            color: white;
            padding: 20px 0;
        }

        footer p {
            margin: 0;
        }

        .btn-primary {
            background-color: #003366;
            border-color: #003366;
        }

        .btn-primary:hover {
            background-color: #00509e;
            border-color: #00509e;
        }

        .form-control:focus {
            border-color: #003366;
            box-shadow: none;
        }

        .nav-link.active {
            color: #003366 !important;
            font-weight: 600;
        }

        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Hover Effects */
        .nav-link:hover {
            color: #00509e !important;
        }
    </style>
</head>
<body>

<!-- Navbar Section -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Placement Services</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#job-placement">Job Placement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#internships">Internships</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#resume-building">Resume Building</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>Welcome to the Placement Services</h1>
        <p>Your gateway to a successful career!</p>
    </div>
</section>

<!-- Main Content -->
<div class="container my-5">

    <!-- Job Placement Assistance -->
    <section id="job-placement">
        <h2>1. Job Placement Assistance</h2>
        <p><strong>Purpose:</strong> To help students secure full-time jobs after graduation by connecting them with employers and preparing them for the recruitment process.</p>
        <ul>
            <li><strong>Career Fairs and Recruitment Drives:</strong> Organizing job fairs where companies visit the campus to hire students.</li>
            <li><strong>Job Listings:</strong> Providing access to a list of job openings through career service portals.</li>
            <li><strong>On-Campus Interviews:</strong> Coordinating and scheduling interviews with employers who visit the campus.</li>
            <li><strong>Post-Graduation Support:</strong> Offering continued support for alumni in job search.</li>
            <li><strong>Collaboration with Companies:</strong> Establishing partnerships with companies to ensure placement pipelines.</li>
        </ul>
    </section>

    <!-- Internship Assistance -->
    <section id="internships">
        <h2>2. Internship Assistance</h2>
        <p><strong>Purpose:</strong> To provide students with real-world work experience before graduation.</p>
        <ul>
            <li><strong>Internship Placement Services:</strong> Connecting students with internships based on their interests.</li>
            <li><strong>Internship Fairs:</strong> Organizing events where companies present internship opportunities.</li>
            <li><strong>Virtual Internships:</strong> Providing remote internships to cater to global opportunities.</li>
        </ul>
    </section>

    <!-- Resume Building and Application Support -->
    <section id="resume-building">
        <h2>3. Resume Building and Application Support</h2>
        <p><strong>Purpose:</strong> To help students create professional resumes that highlight their skills and qualifications.</p>
        <ul>
            <li><strong>Resume Workshops:</strong> Expert-led workshops to refine resumes.</li>
            <li><strong>One-on-One Reviews:</strong> Personalized resume review sessions.</li>
            <li><strong>Cover Letter Assistance:</strong> Guidance on writing tailored cover letters.</li>
        </ul>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <h2>Contact Us</h2>
        <form action="submit_contact.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
</div>

<!-- Footer Section -->
<footer>
    <p>&copy; 2025 University Placement Services | All rights reserved</p>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<script>
    // Sticky Navbar effect on scroll
    window.addEventListener("scroll", function() {
        let navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>

</body>
</html>
