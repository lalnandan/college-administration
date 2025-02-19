<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: ../admin_login.php");
    exit();
}

// Database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "admission";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all students
$sql = "SELECT student_id, full_name, email FROM admissions";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Student Profiles</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <div class="sidebar">
        <h2 class="logo">Admin Portal</h2>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Students</a></li>
            <li><a href="#">Assignments</a></li>
            <li><a href="#">Quizzes</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>
    <div class="main-content">
        <header>
            <h1 id="aiTitle"></h1>
        </header>
        <div class="profile-container">
            <h3>Manage Student Profiles</h3>
            <div class="tabs">
                <button class="tab-button active" onclick="openTab(event, 'allStudents')">All Students</button>
                <button class="tab-button" onclick="openTab(event, 'addStudent')">Add Student</button>
            </div>
            <div id="allStudents" class="tab-content">
                <table>
                    <tr>
                        <th>Student ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    <?php if ($result->num_rows > 0) { ?>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['student_id']); ?></td>
                            <td><?php echo htmlspecialchars($row['full_name']); ?></td>
                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                            <td>
                            <a href="edit_profile.php?student_id=<?php echo urlencode($row['student_id']); ?>">Edit</a>
                            </td>

                        </tr>
                        <?php } ?>
                    <?php } else { ?>
                        <tr><td colspan="4">No students found.</td></tr>
                    <?php } ?>
                </table>
            </div>
            <div id="addStudent" class="tab-content" style="display:none;">
                <p>Coming soon...</p>
            </div>
        </div>
    </div>

    <script>
        // AI Title Animation
        const text = "Welcome, Admin! Editing Student Profile...";
        let index = 0;
        function typeEffect() {
            if (index < text.length) {
                document.getElementById("aiTitle").innerHTML += text.charAt(index);
                index++;
                setTimeout(typeEffect, 100);
            }
        }
        document.addEventListener("DOMContentLoaded", typeEffect);

        // Tab Functionality
        function openTab(evt, tabName) {
            let tabContent = document.getElementsByClassName("tab-content");
            for (let i = 0; i < tabContent.length; i++) {
                tabContent[i].style.display = "none";
            }
            let tabButtons = document.getElementsByClassName("tab-button");
            for (let i = 0; i < tabButtons.length; i++) {
                tabButtons[i].classList.remove("active");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.classList.add("active");
        }
    </script>
</body>
</html>

<?php $conn->close(); ?>
