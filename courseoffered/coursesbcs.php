<?php
// BCS Course Information PHP File

$colleges = [
    [
        'name' => 'The New College, Kolhapur',
        'location' => 'Kolhapur, India',
        'description' => 'Offers a comprehensive BCS program with experienced faculty and modern facilities.',
    ],
    [
        'name' => 'Yashwantrao Chavan Institute of Science',
        'location' => 'Satara, India',
        'description' => 'Known for its strong curriculum and industry connections in computer science.',
    ],
    [
        'name' => 'Dnyanopasak Shikshan Mandal’s College of Arts, Commerce and Science',
        'location' => 'Parbhani, India',
        'description' => 'Provides quality education in computer science with a focus on practical skills.',
    ],
    [
        'name' => 'Sir Sayyed College of Arts, Commerce and Science',
        'location' => 'Aurangabad, India',
        'description' => 'Offers a well-structured BCS program with state-of-the-art laboratories.',
    ],
    [
        'name' => 'Smt. Kasturbai Walchand College',
        'location' => 'Solapur, India',
        'description' => 'Renowned for its computer science department and research opportunities.',
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bachelor of Computer Science (BCS) Program</title>
    
    <!-- Include Google Fonts and Font Awesome Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Styling -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
            color: #333;
        }
        
        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
        
        header h1 {
            margin: 0;
            font-size: 36px;
        }
        
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        
        .section {
            margin-bottom: 40px;
        }
        
        .section h2 {
            font-size: 28px;
            color: #333;
        }
        
        .section p, .section ul {
            font-size: 16px;
            line-height: 1.6;
        }
        
        .colleges-list {
            list-style: none;
            padding: 0;
        }
        
        .college-item {
            background-color: #fff;
            border-radius: 8px;
            margin-bottom: 20px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        
        .college-item:hover {
            transform: scale(1.05);
        }
        
        .college-item h3 {
            margin-top: 0;
            font-size: 22px;
        }
        
        .college-item p {
            font-size: 14px;
            color: #777;
        }
        
        .career-opportunities ul {
            margin-left: 20px;
        }
        
        .footer {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        
        .button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        
        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<header>
    <h1>Bachelor of Computer Science (BCS) Program</h1>
</header>

<div class="container">

    <!-- Introduction Section -->
    <div class="section">
        <h2>About the Program</h2>
        <p>The Bachelor of Computer Science (BCS) is a three-year undergraduate program that provides students with a comprehensive understanding of computer science principles, including software and hardware aspects. The curriculum typically covers subjects such as programming languages, data structures, algorithms, operating systems, and computer networks.</p>
    </div>

    <!-- Eligibility Section -->
    <div class="section">
        <h2>Eligibility Criteria</h2>
        <p>A minimum of 45% marks in Class 12 with Mathematics from a recognized board. Alternatively, completion of a relevant diploma course after Class X.</p>
    </div>

    <!-- Admission Process Section -->
    <div class="section">
        <h2>Admission Process</h2>
        <p>Admissions are generally merit-based, considering Class 12 marks. Some institutions may conduct entrance exams or interviews. Application forms are available online or at the respective college offices.</p>
    </div>

    <!-- Course Fees Section -->
    <div class="section">
        <h2>Course Fees</h2>
        <p>The average annual fee for the BCS program is under INR 50,000 in India. Fees vary depending on the institution's affiliation and location.</p>
    </div>

    <!-- Top Colleges Section -->
    <div class="section">
        <h2>Top Colleges Offering BCS</h2>
        <ul class="colleges-list">
            <?php foreach ($colleges as $college): ?>
                <li class="college-item">
                    <h3><?php echo $college['name']; ?></h3>
                    <p><strong>Location:</strong> <?php echo $college['location']; ?></p>
                    <p><strong>Description:</strong> <?php echo $college['description']; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Career Opportunities Section -->
    <div class="section career-opportunities">
        <h2>Career Opportunities</h2>
        <p>Graduates can pursue roles such as:</p>
        <ul>
            <li>Software Developer</li>
            <li>IT Manager</li>
            <li>System Engineer</li>
            <li>Network Administrator</li>
            <li>Researcher</li>
        </ul>
        <p>The average starting salary is approximately INR 3.5 LPA, with potential for growth based on experience and skills.</p>
    </div>
    <div class="section">
    <h2>Admission Process</h2>
    <p>Admissions are generally merit-based, considering Class 12 marks. Some institutions may conduct entrance exams or interviews. Application forms are available online or at the respective college offices.</p>
    <a href="admissionform.php" class="button">Apply Now</a>
</div>


    <!-- Footer Section -->
    <div class="footer">
        <p>For detailed information on specific colleges, admission procedures, and application forms, please visit the official websites of the respective institutions.</p>
        <a href="https://www.collegedunia.com" class="button">Visit Collegedunia for More Information</a>
    </div>

</div>

</body>
</html>
