<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Categories</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            overflow-x: hidden;
        }

        /* Container */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }

        /* Header */
        .header {
            text-align: center;
            background: linear-gradient(135deg, #007BFF, #00BFFF);
            color: white;
            padding: 80px 20px;
            margin-bottom: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            animation: slideInDown 1s ease-out;
        }

        .header h1 {
            font-size: 3rem;
            margin: 0;
            animation: fadeIn 1.5s ease-in-out;
        }

        .header p {
            font-size: 1.2rem;
            margin-top: 10px;
            animation: fadeIn 2s ease-in-out;
        }

        /* Course Categories Grid */
        .categories {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        /* Category Card */
        .category-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            padding: 25px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
            position: relative;
            animation: fadeInUp 1s ease-out;
        }

        .category-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            transition: left 0.5s ease;
        }

        .category-card:hover::before {
            left: 100%;
        }

        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
        }

        .category-card img {
            width: 100px;
            height: 100px;
            margin-bottom: 20px;
            animation: bounceIn 1s ease;
        }

        .category-card h3 {
            font-size: 1.5rem;
            color: #007BFF;
            margin-bottom: 15px;
        }

        .category-card p {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .category-card a {
            display: inline-block;
            background: #007BFF;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .category-card a:hover {
            background: #0056b3;
            transform: scale(1.05);
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 40px 0;
            margin-top: 50px;
            background: linear-gradient(135deg, #007BFF, #00BFFF);
            color: white;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            animation: slideInUp 1s ease-out;
        }

        .footer p {
            margin: 0;
            font-size: 1rem;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes bounceIn {
            0% {
                opacity: 0;
                transform: scale(0.5);
            }
            60% {
                opacity: 1;
                transform: scale(1.2);
            }
            100% {
                transform: scale(1);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2rem;
            }

            .header p {
                font-size: 1rem;
            }

            .category-card h3 {
                font-size: 1.3rem;
            }

            .category-card p {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Explore Our Courses</h1>
            <p>Discover the right course for your career!</p>
        </div>

        <!-- Course Categories -->
        <div class="categories">
            <div class="category-card">
                <img src="/college/courseoffered/images/bca.png" alt="BCA">
                <h3>Bachelor of Computer Applications (BCA)</h3>
                <p>Learn foundational and advanced concepts in computer applications, programming, and web development.</p>
                <a href="coursesbca.php">Explore BCA Courses</a>
            </div>
            <div class="category-card">
                <img src="/college/courseoffered/images/bcs.png" alt="BCS">
                <h3>Bachelor of Computer Science (BCS)</h3>
                <p>Gain in-depth knowledge in computer science, algorithms, and system design.</p>
                <a href="coursesbcs.php">Explore BCS Courses</a>
            </div>
            <div class="category-card">
                <img src="/college/courseoffered/images/msc.png" alt="MSc CS">
                <h3>Master of Science in Computer Science (MSc CS)</h3>
                <p>Advance your expertise in AI, data science, and research-oriented computer science studies.</p>
                <a href="coursesmcscs.php">Explore MSc CS Courses</a>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>&copy; 2025 Rajiv Gandhi College. All rights reserved. Design by :- Snehalata kulkarni & Lalnandan Yetalkar</p>
        </div>
    </div>

    <!-- JavaScript for Interactivity -->
    <script>
        // Add interactivity (e.g., animations, dynamic content loading)
        document.addEventListener("DOMContentLoaded", function () {
            // Example: Add animation to category cards
            const cards = document.querySelectorAll(".category-card");
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