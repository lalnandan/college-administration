<?php
// it_support.php

// Set the content type to HTML with UTF-8 encoding
header('Content-Type: text/html; charset=UTF-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Support Services</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- For icons -->
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: white;
        }
        
        header {
            background: rgba(0, 0, 0, 0.8);
            padding: 20px;
            text-align: center;
            font-size: 24px;
        }
        
        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        
        nav ul li {
            display: inline;
        }
        
        nav ul li a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        
        nav ul li a:hover {
            background: rgba(255, 255, 255, 0.4);
        }
        
        .intro, .services, .graphics {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
        }
        
        .service-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        
        .service-item {
            background: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 15px;
            transition: transform 0.3s ease;
            text-align: center;
        }
        
        .service-item:hover {
            transform: scale(1.05);
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.5);
        }
        
        .service-item i {
            font-size: 40px;
            margin-bottom: 10px;
        }
        
        .infographic img {
            width: 100%;
            max-width: 600px;
            border-radius: 10px;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s;
        }
        
        .infographic img:hover {
            transform: scale(1.05);
        }
        
        footer {
            text-align: center;
            padding: 20px;
            background: rgba(0, 0, 0, 0.8);
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <h1>Library IT Support Services</h1>
        <nav>
            <ul>
                <li><a href="index1.php">Home</a></li>
                <li><a href="homepageservices.php">Services</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content Section -->
    <main>
        <section class="intro">
            <h2>Introduction to IT Support in Libraries</h2>
            <p>IT support in libraries ensures users can effectively access digital resources by providing technical assistance.</p>
        </section>

        <section class="services">
            <h2>Types of IT Support Services</h2>
            <div class="service-list">
                <div class="service-item">
                    <i class="fas fa-desktop"></i>
                    <h3>Computer Troubleshooting</h3>
                    <p>Helping with system crashes and performance issues.</p>
                </div>
                <div class="service-item">
                    <i class="fas fa-wifi"></i>
                    <h3>Network Support</h3>
                    <p>Fixing Wi-Fi and connectivity problems.</p>
                </div>
                <div class="service-item">
                    <i class="fas fa-cogs"></i>
                    <h3>Software Updates</h3>
                    <p>Ensuring devices have the latest updates.</p>
                </div>
                <div class="service-item">
                    <i class="fas fa-plug"></i>
                    <h3>Device Assistance</h3>
                    <p>Helping users configure peripherals and printers.</p>
                </div>
            </div>
        </section>

        <section class="graphics">
            <h2>Infographics and Visual Insights</h2>
            <div class="infographic">
                <img src="graphic1.png" alt="Library IT Support Infographic" class="responsive">
            </div>
        </section>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2025 Library IT Support. All rights reserved.</p>
    </footer>
</body>
</html>
