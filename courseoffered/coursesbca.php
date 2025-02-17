<?php
$title = "Bachelor of Computer Applications (BCA)";
$overview = [
    "Duration" => "3 years (6 semesters)",
    "Eligibility" => "10+2 from a recognized board (any stream). Some universities require Mathematics in 12th grade.",
    "Admission Process" => ["Merit-based (based on 12th marks)", "Entrance Exam-based (varies by university)"]
];
$syllabus = [
    "Semester 1" => ["Computer Fundamentals & Office Automation", "Programming in C", "Mathematics – I (Discrete Mathematics)", "Digital Electronics", "Business Communication", "Lab Work (C Programming & Office Automation Tools)"],
    "Semester 2" => ["Data Structures using C", "Mathematics – II (Numerical Methods)", "Database Management System (DBMS)", "Operating Systems", "Organizational Behavior", "Lab Work (DBMS & Data Structures)"]
];
$career_opportunities = ["Software Developer", "Web Developer", "Database Administrator", "System Analyst", "Network Administrator", "Cyber Security Expert", "Data Scientist", "Mobile App Developer", "Cloud Engineer", "Entrepreneur"];
$fees = "INR 40,000 - 50,000 per year (varies by institution)";
$form_link = "#";
$brochure_link = "#";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        /* Global Styles */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
            color: #333;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        header {
            background: linear-gradient(90deg, #4CAF50, #45a049);
            padding: 20px 0;
            color: white;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }

        header h1 {
            margin: 0;
            font-size: 36px;
            font-weight: 600;
        }

        h2 {
            color: #333;
            font-size: 26px;
            margin-bottom: 15px;
        }

        ul {
            list-style-type: square;
            padding-left: 20px;
            margin-top: 10px;
        }

        li {
            font-size: 16px;
            line-height: 1.6;
        }

        .button {
            display: inline-block;
            background: linear-gradient(90deg, #4CAF50, #2e7d32);
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .button:hover {
            background: #2e7d32;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        .section {
            margin-bottom: 40px;
        }

        .section-title {
            font-size: 22px;
            color: #4CAF50;
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 10px;
            font-weight: 600;
        }

        .card {
            background: #fff;
            padding: 20px;
            margin: 15px 0;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: scale(1.03);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }

        .footer {
            background: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
    </style>
</head>
<body>

<header>
    <h1><?php echo $title; ?></h1>
</header>

<div class="container">

    <!-- Course Overview Section -->
    <div class="section overview">
        <h2 class="section-title">Course Overview</h2>
        <div class="card">
            <ul>
                <?php foreach ($overview as $key => $value) { ?>
                    <li><strong><?php echo $key; ?>:</strong> <?php echo is_array($value) ? implode(', ', $value) : $value; ?></li>
                <?php } ?>
            </ul>
        </div>
    </div>

    <!-- Syllabus Section -->
    <div class="section syllabus">
        <h2 class="section-title">Syllabus</h2>
        <?php foreach ($syllabus as $semester => $subjects) { ?>
            <div class="card">
                <h3><?php echo $semester; ?></h3>
                <ul>
                    <?php foreach ($subjects as $subject) { ?>
                        <li><?php echo $subject; ?></li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>
    </div>

    <!-- Career Opportunities Section -->
    <div class="section career-opportunities">
        <h2 class="section-title">Career Opportunities</h2>
        <div class="card">
            <ul>
                <?php foreach ($career_opportunities as $career) { ?>
                    <li><?php echo $career; ?></li>
                <?php } ?>
            </ul>
        </div>
    </div>

    <!-- Course Fees Section -->
    <div class="section fees-section">
        <h2 class="section-title">Course Fees</h2>
        <div class="card">
            <p><strong>Average Fees:</strong> <?php echo $fees; ?></p>
        </div>
    </div>

    <!-- Admission Form Section -->
    <div class="section form-section">
        <h2 class="section-title">Admission Form</h2>
        <div class="card">
            <a href="admissionform.php" class="button">Apply Now</a>
        </div>
    </div>

</div>

<!-- Footer Section -->
<div class="footer">
    <p>&copy; 2025 BCA Program. All Rights Reserved.</p>
</div>

</body>
</html>
