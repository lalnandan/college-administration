<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }

        header {
            text-align: center;
            background-color: #4CAF50;
            color: white;
            padding: 20px;
        }

        header h1 {
            margin: 0;
        }

        .gallery-section {
            margin-top: 30px;
        }

        .gallery-section h2 {
            font-size: 24px;
            color: #4CAF50;
            margin-bottom: 20px;
            text-align: center;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }

        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: white;
            margin-top: 30px;
        }
    </style>
</head>
<body>

<div class="container">

    <!-- Header Section -->
    <header>
        <h1>Gallery</h1>
        <p>Explore our campus, student activities, events, and award ceremonies!</p>
    </header>

    <!-- Campus Photos Section -->
    <div class="gallery-section">
        <h2>Campus Photos</h2>
        <div class="gallery">
            <img src="campus1.jpg" alt="Campus Photo 1">
            <img src="campus2.jpg" alt="Campus Photo 2">
            <img src="campus3.jpg" alt="Campus Photo 3">
            <img src="campus4.jpg" alt="Campus Photo 4">
        </div>
    </div>

    <!-- Student Activities Section -->
    <div class="gallery-section">
        <h2>Student Activities</h2>
        <div class="gallery">
            <img src="activity1.jpg" alt="Student Activity 1">
            <img src="activity2.jpg" alt="Student Activity 2">
            <img src="activity3.jpg" alt="Student Activity 3">
            <img src="activity4.jpg" alt="Student Activity 4">
        </div>
    </div>

    <!-- Events Highlights Section -->
    <div class="gallery-section">
        <h2>Events Highlights</h2>
        <div class="gallery">
            <img src="event1.jpg" alt="Event Highlight 1">
            <img src="event2.jpg" alt="Event Highlight 2">
            <img src="event3.jpg" alt="Event Highlight 3">
            <img src="event4.jpg" alt="Event Highlight 4">
        </div>
    </div>

    <!-- Award Ceremony Section -->
    <div class="gallery-section">
        <h2>Award Ceremony</h2>
        <div class="gallery">
            <img src="award1.jpg" alt="Award Ceremony 1">
            <img src="award2.jpg" alt="Award Ceremony 2">
            <img src="award3.jpg" alt="Award Ceremony 3">
            <img src="award4.jpg" alt="Award Ceremony 4">
        </div>
    </div>

</div>

<!-- Footer Section -->
<footer>
    <p>&copy; 2025 [Rajiv Gandhi Nanded]. All rights reserved. Design by :- Snehalata kulkarni & Lalnandan Yetalkar</p>
</footer>

</body>
</html>
