<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: studentportallogin.php"); // Redirect to login page if not logged in
    exit();
}

$student_id = $_SESSION['username']; // Get the logged-in student ID

// Database connection
$host = "localhost"; // Change if needed
$username = "root"; // Your DB username
$password = ""; // Your DB password
$database = "admission"; // Updated database name

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch student details using student_id
$sql = "SELECT profile_photo, full_name, student_id, email, course FROM admissions WHERE student_id = ?";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("SQL Error: " . $conn->error);
}

$stmt->bind_param("s", $student_id);
$stmt->execute();
$result = $stmt->get_result();

// Check if data exists
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $profile_photo = !empty($row['profile_photo']) ? $row['profile_photo'] : 'default-profile.jpg';
    $name = $row['full_name'];
    $student_id = $row['student_id']; // Fetching student ID correctly
    $email = $row['email'];
    $course = $row['course'];
} else {
    $profile_photo = 'default-profile.jpg';
    $name = "Unknown";
    $student_id = "N/A";
    $email = "N/A";
    $course = "N/A";
}

$stmt->close();
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            background-color: #f0f2f5;
            font-family: Arial, sans-serif;
        }
        .dashboard-container {
            max-width: 1400px;
            margin: auto;
            padding: 20px;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .profile-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
        }
        .sidebar {
            background: #343a40;
            color: white;
            padding: 20px;
            height: 100vh;
            position: fixed;
            width: 250px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
        }
        .sidebar a:hover {
            background: #495057;
        }
        .content {
            margin-left: 270px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 sidebar">
                <h4>Student Dashboard</h4>
                <a href="/college/studentportal/profile_tab/profile_tab.php">profile</a>
                <a href="/college/studentportal/syllabustab/syllabustab.php">Syllabus</a>
                <a href="/college/studentportal/discussion_dashboard/discussion_dashboard.php">Discussion</a>
                <a href="/college/studentportal/news_feedtab/news_feedtab.php">News Feeds</a>
                <a href="/college/studentportal/attendancetab/attendancetab.php">Attendance</a>
                <a href="/college/studentportal/assignmenttab/assignmenttab.php">Assignments</a>
                <a href="/college/studentportal/quizzestab/quizzestab.php">Quizzes</a>
                <a href="#">Modules</a>
                <a href="/college/studentportal/performancetab/performancetab.php">Performance</a>
                <a href="/college/studentportal/testresulttab/testresulttab.php">Test Results</a>
                <a href="/college/studentportal/studymaterialstab/studymaterialstab.php">Study Materials</a>
                <a href="/college/studentportal/recordingtab/recordingtab.php">Recordings</a>
                <a href="/college/studentportal/upcomingsessiontab/upcomingsessionstab.php">Upcoming Sessions</a>
                <a href="/college/studentportal/supporttab/supporttab.php">Support</a>
                <a href="STUDENTPORTALLOGOUT.PHP" class="btn btn-danger w-100 mt-3">Logout</a>

            </nav>
            
            <!-- Main Content -->
            <main class="col-md-9 content">
                <div class="row">
                    <div class="col-md-4">
                    <div class="card text-center p-3">
                    <img src="/college/Admissions/uploads/<?php echo htmlspecialchars(basename($profile_photo)); ?>" alt="Profile" class="profile-img mx-auto">
                            <h5 class="mt-2"><?php echo htmlspecialchars($name); ?></h5>
                            <p>Student ID: <?php echo htmlspecialchars($student_id); ?></p>
                            <p>Email: <?php echo htmlspecialchars($email); ?></p>
                            <p>Course: <?php echo htmlspecialchars($course); ?></p>
                    </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card p-3">
                            <h5>Performance Overview</h5>
                            <canvas id="performanceChart" height="150"></canvas>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="card p-3">
                            <h5>Time Spent on Portal</h5>
                            <canvas id="engagementChart" height="150"></canvas>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-3">
                            <h5>Upcoming Sessions & Recordings</h5>
                            <p><strong>Upcoming Session:</strong> Machine Learning (Feb 12)</p>
                            <p><strong>Last Watched:</strong> Data Structures - Linked Lists</p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="card p-3">
                            <h5>Test Results</h5>
                            <p><strong>Latest Test:</strong> AI Fundamentals - 85%</p>
                            <p><strong>Previous Test:</strong> Database Systems - 78%</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-3">
                            <h5>Study Materials</h5>
                            <p><a href="#">Download AI Lecture Notes</a></p>
                            <p><a href="#">Access Database Tutorials</a></p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    
    <script>
        var ctx = document.getElementById('performanceChart').getContext('2d');
        var performanceChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Assignments', 'Quizzes', 'Exams'],
                datasets: [{
                    label: 'Scores',
                    data: [85, 90, 88],
                    backgroundColor: ['red', 'blue', 'green']
                }]
            }
        });

        var ctx2 = document.getElementById('engagementChart').getContext('2d');
        var engagementChart = new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: ['Study Time', 'Breaks'],
                datasets: [{
                    label: 'Time Spent',
                    data: [12, 3],
                    backgroundColor: ['orange', 'gray']
                }]
            }
        });
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
