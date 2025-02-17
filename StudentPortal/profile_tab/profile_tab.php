<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: studentportallogin.php"); // Redirect to login page if not logged in
    exit();
}

$student_id = $_SESSION['username']; // Get the logged-in student ID

// Database connection
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "admission"; 

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch student details using student_id
$sql = "SELECT profile_photo, full_name, student_id, phone , address, email, course FROM admissions WHERE student_id = ?";
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
    $student_id = $row['student_id'];
    $email = $row['email'];
    $course = $row['course'];
    $phone = $row['phone'];
    $address = $row['address'];
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
    <title>Student Profile Dashboard</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        body {
            background: #f4f4f4;
            color: #333;
        }
        .container {
            max-width: 900px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .profile-pic {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #007bff;
        }
        .student-info {
            flex: 1;
            margin-left: 20px;
        }
        h2 {
            margin-bottom: 5px;
            color: #007bff;
        }
        .tabs {
            display: flex;
            justify-content: space-around;
            background: #007bff;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .tab {
            cursor: pointer;
            font-weight: bold;
        }
        .tab:hover {
            text-decoration: underline;
        }
        .content {
            display: none;
            padding: 20px;
            border-top: 2px solid #ddd;
        }
        .active {
            display: block;
        }
        .section {
            margin-bottom: 15px;
        }
        .section h3 {
            color: #007bff;
            margin-bottom: 5px;
        }
        .button {
            padding: 8px 12px;
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .button:hover {
            background: #0056b3;
        }
        .theme-toggle {
            padding: 5px 10px;
            border: none;
            background: black;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }
        .dark-mode {
            background: #333;
            color: white;
        }
        .dark-mode .container {
            background: #444;
            color: white;
        }
        .profile-pic {
    width: 80px; /* Adjust size as needed */
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #007bff;
}

    </style>
</head>
<body>

    <div class="container">
        <div class="header">
        <img src="/college/Admissions/uploads/<?php echo htmlspecialchars(basename($profile_photo)); ?>" alt="Profile" class="profile-pic">
          <div class="student-info">
                <h2><?php echo htmlspecialchars($name); ?></h2>
                <p>Student ID: <?php echo htmlspecialchars($student_id); ?></p>
                <p>Email: <?php echo htmlspecialchars($email); ?></p>
                <p>Course: <?php echo htmlspecialchars($course); ?></p>
            </div>
            <button class="theme-toggle" onclick="toggleTheme()">🌙 Dark Mode</button>
        </div>

        <div class="tabs">
            <span class="tab" onclick="openTab('personal')">Personal Info</span>
            <span class="tab" onclick="openTab('academic')">Academic</span>
            <span class="tab" onclick="openTab('settings')">Settings</span>
            <span class="tab" onclick="openTab('achievements')">Achievements</span>
            <span class="tab" onclick="openTab('social')">Social</span>
        </div>

        <div id="personal" class="content active">
            <div class="section">
                <h3>Contact Details</h3>
                <p>Phone: <?php echo htmlspecialchars($phone);?></p>
                <p>Address:<?php echo htmlspecialchars($address);?></p>
            </div>
        </div>

        <div id="academic" class="content">
            <div class="section">
                <h3>Enrolled Courses</h3>
                <p><?php echo htmlspecialchars($course); ?></p>
            </div>
        </div>

        <div id="settings" class="content">
            <div class="section">
                <h3>Account Settings</h3>
                <button class="button">Change Password</button>
            </div>
            <div class="section">
                <h3>Notifications</h3>
                <button class="button">Manage Notifications</button>
            </div>
        </div>

        <div id="achievements" class="content">
            <div class="section">
                <h3>Badges & Rewards</h3>
                <p>🏆 Top Performer</p>
                <p>📜 JavaScript Certification</p>
            </div>
        </div>

        <div id="social" class="content">
            <div class="section">
                <h3>Discussion Forum Activity</h3>
                <p>Posts: 10 | Replies: 25</p>
            </div>
            <div class="section">
                <h3>Connections & Groups</h3>
                <p>Member of Study Group: Web Dev Enthusiasts</p>
            </div>
        </div>

    </div>

    <script>
        function openTab(tabId) {
            let contents = document.querySelectorAll('.content');
            contents.forEach(content => content.classList.remove('active'));
            document.getElementById(tabId).classList.add('active');
        }

        function toggleTheme() {
            document.body.classList.toggle('dark-mode');
        }
    </script>

</body>
</html>
