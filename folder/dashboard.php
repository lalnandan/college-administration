<?php
session_start();

// Redirect to login page if the admin is not logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

// Here you can add your database connection logic to fetch statistics, student data, etc.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f7fc;
            margin: 0;
        }
        
        /* Sidebar Styling */
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #007BFF;
            color: white;
            padding-top: 50px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar a {
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #0056b3;
        }

        /* Main content area */
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #007BFF;
            color: white;
            padding: 20px;
        }

        .header h1 {
            margin: 0;
        }

        .header .logout-btn {
            background-color: #dc3545;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            color: white;
            font-size: 16px;
        }

        .header .logout-btn:hover {
            background-color: #c82333;
        }

        /* Dashboard Cards */
        .card {
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px 0;
            border-radius: 8px;
        }

        .card h5 {
            color: #333;
            font-size: 22px;
        }

        .card p {
            color: #777;
            font-size: 16px;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #007BFF;
            color: white;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2 class="text-center">Admin Panel</h2>
        <a href="dashboard.php">Dashboard</a>
        <a href="view_admissions.php">View Admissions</a>
        <a href="add_admission.php">Add Admission</a>
        <a href="settings.php">Settings</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">

        <!-- Header -->
        <div class="header">
            <h1>Welcome to Admin Dashboard</h1>
            <form action="logout.php" method="POST">
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        </div>

        <!-- Statistics Section -->
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <h5>Total Admissions</h5>
                        <p>120</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <h5>Pending Applications</h5>
                        <p>15</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <h5>Students Registered</h5>
                        <p>90</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <h5>New Admissions This Week</h5>
                        <p>25</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Admissions Table -->
        <div class="container mt-4">
            <h3>Recent Admissions</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Full Name</th>
                        <th>Course</th>
                        <th>Start Date</th>
                        <th>Email</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Here you can loop through your database and display student records -->
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>Computer Science</td>
                        <td>01/01/2025</td>
                        <td>johndoe@example.com</td>
                        <td><span class="badge bg-success">Approved</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>Mathematics</td>
                        <td>15/02/2025</td>
                        <td>janesmith@example.com</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>

    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 [Rajiv Gandhi Nanded]. All rights reserved. Design by :- Snehalata kulkarni & Lalnandan Yetalkar</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
