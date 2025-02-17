<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning Platform</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 90%;
            margin: auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            background-color: #007BFF;
            color: white;
            padding: 20px 0;
            margin-bottom: 30px;
        }

        .header h1 {
            margin: 0;
        }

        .section {
            margin-bottom: 40px;
        }

        .section h2 {
            color: #333;
            margin-bottom: 10px;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin-bottom: 20px;
        }

        .card h3 {
            margin: 0;
            color: #007BFF;
        }

        .card p {
            color: #666;
            line-height: 1.6;
        }

        .tools {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .tool-card {
            flex: 1 1 45%;
            background-color: #fff;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .tool-card h4 {
            margin: 10px 0;
            color: #007BFF;
        }

        .tool-card img {
            width: 80px;
            height: 80px;
            margin-bottom: 10px;
        }

        .footer {
            text-align: center;
            padding: 20px 0;
            margin-top: 30px;
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Welcome to Our E-Learning Platform</h1>
            <p>Access study materials, mock tests, assignments, and interactive tools to excel in your studies!</p>
        </div>

        <!-- Study Material Section -->
        <div class="section">
            <h2>Study Material</h2>
            <div class="card">
                <h3>Comprehensive Study Notes</h3>
                <p>Download chapter-wise study notes and handouts curated by expert faculty to help you grasp concepts easily.</p>
                <a href="#" style="color: #007BFF;">Download Notes</a>
            </div>
            <div class="card">
                <h3>Video Lectures</h3>
                <p>Watch pre-recorded video lectures from industry experts, available 24/7 for your convenience.</p>
                <a href="#" style="color: #007BFF;">Watch Videos</a>
            </div>
        </div>

        <!-- Mock Test Section -->
        <div class="section">
            <h2>Mock Tests</h2>
            <div class="card">
                <h3>Practice Tests</h3>
                <p>Test your knowledge with subject-wise practice tests and get detailed performance analysis.</p>
                <a href="#" style="color: #007BFF;">Start Test</a>
            </div>
            <div class="card">
                <h3>Previous Year Question Papers</h3>
                <p>Prepare with past exam papers and familiarize yourself with the pattern and difficulty level.</p>
                <a href="#" style="color: #007BFF;">View Papers</a>
            </div>
        </div>

        <!-- Assignments & Solutions Section -->
        <div class="section">
            <h2>Assignments & Solutions</h2>
            <div class="card">
                <h3>Weekly Assignments</h3>
                <p>Complete weekly assignments to reinforce your learning and practice what you've studied.</p>
                <a href="#" style="color: #007BFF;">Download Assignments</a>
            </div>
            <div class="card">
                <h3>Solutions & Explanations</h3>
                <p>Access detailed solutions and explanations for all assignments and mock tests.</p>
                <a href="#" style="color: #007BFF;">View Solutions</a>
            </div>
        </div>

        <!-- Interactive Tools Section -->
        <div class="section">
            <h2>Interactive Tools</h2>
            <div class="tools">
        <div class="tool-card">
        <img src="/college/studymaterial/img/calculator.png" alt="Calculator Icon">
        <h4>Online Calculator</h4>
        <p>Perform quick calculations for your math and science problems.</p>

        <!-- Link to the calculator.php page -->
        <a href="calculator.php" class="calculator-link">
            <button class="calculator-btn">Go to Calculator</button>
        </a>
         </div>
         </div>

                <div class="tool-card">
                    <img src="/college/studymaterial/img/dictionary.png" alt="Dictionary Icon">
                    <h4>Digital Dictionary</h4>
                    <p>Look up meanings and synonyms to improve your vocabulary.</p>
                </div>
                <div class="tool-card">
                    <img src="/college/studymaterial/img/quiz.png" alt="Quiz Icon">
                    <h4>Interactive Quizzes</h4>
                    <p>Challenge yourself with real-time quizzes and compete with others.</p>
                </div>
                <div class="tool-card">
                    <img src="/college/studymaterial/img/notes.gif" alt="Notes GIF">
                     <h4>Online Notes</h4>
                     <p>Take notes and save them online for easy access anytime.</p>
                    <button onclick="openNotesPopup()" class="btn btn-primary">Open Notes</button>
</div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>&copy; 2025 [Rajiv Gandhi Nanded]. All rights reserved. Design by :- Snehalata kulkarni & Lalnandan Yetalkar</p>
        </div>
    </div>
</body>
</html>
