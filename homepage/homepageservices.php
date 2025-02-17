<?php
// services.php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Services</title>
    <style>
        /* General Body Style */

        /* Header Style */
        Header {
            background-color:rgb(243, 0, 0);
            color: black;
        }

        Header p {
            margin: 0;
        }
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa;
            color: #333;
        }

        /* Navbar Styling */
        nav.navbar {
            background-color:rgb(255, 55, 5);
        }

        nav.navbar a.navbar-brand, nav.navbar a.nav-link {
            color: black;
        }

        nav.navbar a.nav-link:hover {
            color: #f1c40f;
        }

        /* Services Section */
        .services-section {
            background-color: #fff;
            padding: 60px 0;
        }

        .services-section h2 {
            font-size: 2.5rem;
            margin-bottom: 40px;
            color: #333;
        }

        .service-card {
            background-color: #f1f1f1;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .service-card img {
            max-width: 100%;
            border-radius: 8px;
            height: 200px;
            object-fit: cover;
        }

        .service-card h3 {
            margin-top: 20px;
            font-size: 1.5rem;
            color: #333;
        }

        .service-card p {
            font-size: 1rem;
            color: #777;
        }

        .service-card a.btn {
            margin-top: 15px;
            font-size: 1rem;
            background-color: #007bff;
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
        }

        .service-card a.btn:hover {
            background-color: #0056b3;
        }

        /* Footer Style */
        footer {
            background-color:rgb(243, 77, 0);
            color: black;
        }

        footer p {
            margin: 0;
        }

        /* Icon Styling */
        .service-card .fa {
            font-size: 100px; /* Increased size from 50px to 100px */
            margin-bottom: 15px;
            color: #007bff;
        }

    </style>
    <!-- Optional Bootstrap for better UI -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header Section -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index1.php">College Admin</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/college/homepage/index1.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/college/aboutus/aboutus.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/college/contactus/contactus.php">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Services Section -->
    <section class="services-section">
        <div class="container py-5">
            <h2 class="text-center">Our College Services</h2>
            <div class="row">
                <!-- Service 1: Library -->
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="fas fa-book"></i>
                        <h3>Library Services</h3>
                        <p>Access to a vast collection of books, journals, and research papers.</p>
                        <a href="/college/homepage/homepageservices/libraryservices.php" class="btn btn-primary">Explore</a>
                    </div> 
                </div>
                <!-- Service 2: IT Support -->
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="fas fa-laptop"></i>
                        <h3>IT Support</h3>
                        <p>Technical assistance with all computer and network-related issues.</p>
                        <a href="/college/homepage/homepageservices/itsupport.php" class="btn btn-primary">Get Help</a>
                    </div>
                </div>
                <!-- Service 3: Healthcare -->
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="fas fa-hospital"></i>
                        <h3>Healthcare Services</h3>
                        <p>On-campus medical facilities and support for all students and staff.</p>
                        <a href="/college/homepage/homepageservices/healthcareservices.php" class="btn btn-primary">View Services</a>
                    </div>
                </div>
                <!-- Service 4: Counseling -->
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="fas fa-users"></i>
                        <h3>Counseling Services</h3>
                        <p>Confidential counseling sessions for personal and academic growth.</p>
                        <a href="/college/homepage/homepageservices/counselingservices.php" class="btn btn-primary">Book a Session</a>
                    </div>
                </div>
                <!-- Service 5: Scholarships -->
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="fas fa-money-bill-wave"></i>
                        <h3>Scholarships</h3>
                        <p>Various scholarship opportunities for students to fund their education.</p>
                        <a href="/college/admissions/scholarship and finance.php" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
                <!-- Service 6: Placement -->
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="fas fa-briefcase"></i>
                        <h3>Placement Services</h3>
                        <p>Assistance with job placements and internships for graduating students.</p>
                        <a href="/college/homepage/homepageservices/placementservices.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-light text-center py-4">
        <p>&copy; 2025 College Administration System | Designed by Your College</p>
    </footer>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
// Footer or any additional PHP code can be added here if needed.
?>
