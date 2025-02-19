<?php
session_start();

// Check if the admin is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: admin_login.php"); // Redirect to login page if not logged in
    exit();
}

// Continue with the dashboard content
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin_portal_css.css">
</head>
<body>
    <div class="dashboard-container">
        <h1>Welcome, Admin</h1>
        <p>This is the admin dashboard.</p>
        
        <!-- Admin-specific content here -->
        
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin CRM Portal</title>
    <link rel="stylesheet" href="admin_dashboard.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <h2>Admin CRM</h2>
        </div>
        <ul class="nav-links">
            <li><a href="#">Dashboard</a></li>
            <li><a href="/college/admin_portal/profile/profile.php">Profiles</a></li>
            <li><a href="#">Syllabus</a></li>
            <li><a href="#">Attendance</a></li>
            <li><a href="#">Assignments</a></li>
            <li><a href="#">Quizzes</a></li>
            <li><a href="#">Modules</a></li>
            <li><a href="#">Performance</a></li>
            <li><a href="#">Test Results</a></li>
            <li><a href="#">Study Materials</a></li>
            <li><a href="#">Recordings</a></li>
            <li><a href="#">Upcoming Sessions</a></li>
            <li><a href="#">Support</a></li>
            <div class="container">
        <!-- Logout Button -->
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>

        </ul>
    </div>
    
    <div class="main-content">
        <header>
            <h1>Welcome to Admin CRM</h1>
            <div class="user-profile">
                <img src="user-profile.jpg" alt="User">
                <p>Admin</p>
            </div>
        </header>
        <main>
            <h2>Dashboard Overview</h2>
            <!-- Add your content here -->
        </main>
    </div>
</body>
</html>
