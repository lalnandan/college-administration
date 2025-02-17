<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Profiles</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            background-color: #fff;
            border-radius: 8px;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            color: #333;
        }

        .faculty-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }

        .faculty-card {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .faculty-card:hover {
            transform: scale(1.05);
        }

        .faculty-photo {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background-color: #eee;
            margin-bottom: 20px;
            overflow: hidden;
        }

        .faculty-photo img {
            width: 100%;
            height: auto;
        }

        .faculty-card h2 {
            color: #333;
        }

        .faculty-card p {
            font-size: 16px;
            line-height: 1.6;
        }

        .footer {
            margin-top: 40px;
            text-align: center;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Our Esteemed Faculty Members</h1>
            <p>Meet the professionals who make our institution thrive.</p>
        </div>

        <div class="faculty-grid">
            <!-- Faculty 1 -->
            <div class="faculty-card">
                <div class="faculty-photo">
                    <img src="img 2.jpg" alt="aaaa">
                </div>
                <h2>Dr. John Doe</h2>
                <p><strong>Position:</strong> Professor of Computer Science</p>
                <p><strong>Email:</strong> johndoe@example.com</p>
                <p><strong>Phone:</strong> +1 234 567 890</p>
                <h3>Qualifications:</h3>
                <ul>
                    <li>Ph.D. in Computer Science, XYZ University</li>
                    <li>Masters in Software Engineering, ABC University</li>
                    <li>Bachelor of Technology, DEF University</li>
                </ul>
                <h3>Subjects Taught:</h3>
                <ul>
                    <li>Data Structures</li>
                    <li>Operating Systems</li>
                    <li>Machine Learning</li>
                </ul>
            </div>

            <!-- Faculty 2 -->
            <div class="faculty-card">
                <div class="faculty-photo">
                    <img src="faculty2-photo.jpg" alt="Faculty 2 Photo">
                </div>
                <h2>Prof. Jane Smith</h2>
                <p><strong>Position:</strong> Associate Professor of Mathematics</p>
                <p><strong>Email:</strong> janesmith@example.com</p>
                <p><strong>Phone:</strong> +1 234 567 891</p>
                <h3>Qualifications:</h3>
                <ul>
                    <li>M.Sc. in Mathematics, ABC University</li>
                    <li>B.Sc. in Mathematics, XYZ University</li>
                </ul>
                <h3>Subjects Taught:</h3>
                <ul>
                    <li>Calculus</li>
                    <li>Linear Algebra</li>
                    <li>Discrete Mathematics</li>
                </ul>
            </div>

            <!-- Faculty 3 -->
            <div class="faculty-card">
                <div class="faculty-photo">
                    <img src="faculty3-photo.jpg" alt="Faculty 3 Photo">
                </div>
                <h2>Dr. Sarah Lee</h2>
                <p><strong>Position:</strong> Professor of Physics</p>
                <p><strong>Email:</strong> sarahlee@example.com</p>
                <p><strong>Phone:</strong> +1 234 567 892</p>
                <h3>Qualifications:</h3>
                <ul>
                    <li>Ph.D. in Physics, DEF University</li>
                    <li>M.Sc. in Physics, XYZ University</li>
                    <li>B.Sc. in Physics, ABC University</li>
                </ul>
                <h3>Subjects Taught:</h3>
                <ul>
                    <li>Quantum Mechanics</li>
                    <li>Thermodynamics</li>
                    <li>Classical Mechanics</li>
                </ul>
            </div>

            <!-- Faculty 4 -->
            <div class="faculty-card">
                <div class="faculty-photo">
                    <img src="faculty4-photo.jpg" alt="Faculty 4 Photo">
                </div>
                <h2>Prof. Michael Brown</h2>
                <p><strong>Position:</strong> Professor of Chemistry</p>
                <p><strong>Email:</strong> michaelbrown@example.com</p>
                <p><strong>Phone:</strong> +1 234 567 893</p>
                <h3>Qualifications:</h3>
                <ul>
                    <li>Ph.D. in Organic Chemistry, ABC University</li>
                    <li>M.Sc. in Chemistry, XYZ University</li>
                    <li>B.Sc. in Chemistry, DEF University</li>
                </ul>
                <h3>Subjects Taught:</h3>
                <ul>
                    <li>Organic Chemistry</li>
                    <li>Inorganic Chemistry</li>
                    <li>Physical Chemistry</li>
                </ul>
            </div>

            <!-- Faculty 5 -->
            <div class="faculty-card">
                <div class="faculty-photo">
                    <img src="faculty5-photo.jpg" alt="Faculty 5 Photo">
                </div>
                <h2>Dr. Emily Clark</h2>
                <p><strong>Position:</strong> Associate Professor of Economics</p>
                <p><strong>Email:</strong> emilyclark@example.com</p>
                <p><strong>Phone:</strong> +1 234 567 894</p>
                <h3>Qualifications:</h3>
                <ul>
                    <li>Ph.D. in Economics, DEF University</li>
                    <li>M.A. in Economics, XYZ University</li>
                    <li>B.A. in Economics, ABC University</li>
                </ul>
                <h3>Subjects Taught:</h3>
                <ul>
                    <li>Microeconomics</li>
                    <li>Macroeconomics</li>
                    <li>International Trade</li>
                </ul>
            </div>

            <!-- Faculty 6 -->
            <div class="faculty-card">
                <div class="faculty-photo">
                    <img src="faculty6-photo.jpg" alt="Faculty 6 Photo">
                </div>
                <h2>Dr. Robert Williams</h2>
                <p><strong>Position:</strong> Professor of History</p>
                <p><strong>Email:</strong> robertwilliams@example.com</p>
                <p><strong>Phone:</strong> +1 234 567 895</p>
                <h3>Qualifications:</h3>
                <ul>
                    <li>Ph.D. in History, XYZ University</li>
                    <li>M.A. in History, ABC University</li>
                    <li>B.A. in History, DEF University</li>
                </ul>
                <h3>Subjects Taught:</h3>
                <ul>
                    <li>Modern European History</li>
                    <li>World History</li>
                    <li>American History</li>
                </ul>
            </div>

            <!-- Faculty 7 -->
            <div class="faculty-card">
                <div class="faculty-photo">
                    <img src="faculty7-photo.jpg" alt="Faculty 7 Photo">
                </div>
                <h2>Prof. Linda Green</h2>
                <p><strong>Position:</strong> Associate Professor of Literature</p>
                <p><strong>Email:</strong> lindagreen@example.com</p>
                <p><strong>Phone:</strong> +1 234 567 896</p>
                <h3>Qualifications:</h3>
                <ul>
                    <li>M.A. in English Literature, ABC University</li>
                    <li>B.A. in English Literature, XYZ University</li>
                </ul>
                <h3>Subjects Taught:</h3>
                <ul>
                    <li>Shakespeare Studies</li>
                    <li>Modern Poetry</li>
                    <li>Literary Theory</li>
                </ul>
            </div>

            <!-- Faculty 8 -->
            <div class="faculty-card">
                <div class="faculty-photo">
                    <img src="faculty8-photo.jpg" alt="Faculty 8 Photo">
                </div>
                <h2>Dr. Daniel Taylor</h2>
                <p><strong>Position:</strong> Professor of Psychology</p>
                <p><strong>Email:</strong> danieltaylor@example.com</p>
                <p><strong>Phone:</strong> +1 234 567 897</p>
                <h3>Qualifications:</h3>
                <ul>
                    <li>Ph.D. in Psychology, DEF University</li>
                    <li>M.A. in Clinical Psychology, XYZ University</li>
                    <li>B.A. in Psychology, ABC University</li>
                </ul>
                <h3>Subjects Taught:</h3>
                <ul>
                    <li>Cognitive Psychology</li>
                    <li>Clinical Psychology</li>
                    <li>Behavioral Science</li>
                </ul>
            </div>

            <!-- Faculty 9 -->
            <div class="faculty-card">
                <div class="faculty-photo">
                    <img src="faculty9-photo.jpg" alt="Faculty 9 Photo">
                </div>
                <h2>Prof. William Harris</h2>
                <p><strong>Position:</strong> Professor of Political Science</p>
                <p><strong>Email:</strong> williamharris@example.com</p>
                <p><strong>Phone:</strong> +1 234 567 898</p>
                <h3>Qualifications:</h3>
                <ul>
                    <li>Ph.D. in Political Science, ABC University</li>
                    <li>M.A. in Political Science, XYZ University</li>
                    <li>B.A. in Political Science, DEF University</li>
                </ul>
                <h3>Subjects Taught:</h3>
                <ul>
                    <li>Political Theory</li>
                    <li>International Relations</li>
                    <li>Public Policy</li>
                </ul>
            </div>

            <!-- Faculty 10 -->
            <div class="faculty-card">
                <div class="faculty-photo">
                    <img src="faculty10-photo.jpg" alt="Faculty 10 Photo">
                </div>
                <h2>Dr. Sophia Martinez</h2>
                <p><strong>Position:</strong> Associate Professor of Sociology</p>
                <p><strong>Email:</strong> sophiamartinez@example.com</p>
                <p><strong>Phone:</strong> +1 234 567 899</p>
                <h3>Qualifications:</h3>
                <ul>
                    <li>Ph.D. in Sociology, DEF University</li>
                    <li>M.A. in Sociology, XYZ University</li>
                    <li>B.A. in Sociology, ABC University</li>
                </ul>
                <h3>Subjects Taught:</h3>
                <ul>
                    <li>Sociological Theory</li>
                    <li>Social Inequality</li>
                    <li>Cultural Sociology</li>
                </ul>
            </div>

        </div>

        <div class="footer">
            <p>&copy; 2025 [Rajiv Gandhi Nanded]. All rights reserved. Design by :- Snehalata kulkarni & Lalnandan Yetalkar</p>
        </div>
    </div>
</body>
</html>
