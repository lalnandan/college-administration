<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: studentportallogin.php"); // Redirect to login page if not logged in
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Sessions Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- For chart integration -->
</head>
<body>

    <div class="dashboard-container">
        <div class="sidebar">
            <h2>Student Dashboard</h2>
            <nav>
                <ul>
                    <li><a href="#upcoming-sessions">Upcoming Sessions</a></li>
                    <li><a href="#study-material">Study Material</a></li>
                    <li><a href="#performance">Performance</a></li>
                </ul>
            </nav>
        </div>

        <div class="main-content">
            <div class="section" id="upcoming-sessions">
                <h2>Upcoming Sessions</h2>

                <!-- Session Overview -->
                <div class="session-overview">
                    <div class="next-session">
                        <h3>Next Upcoming Session</h3>
                        <p><strong>Subject:</strong> Introduction to Physics</p>
                        <p><strong>Time:</strong> 10:00 AM - 11:30 AM</p>
                        <p><strong>Location:</strong> Room 204</p>
                        <p><strong>Instructor:</strong> Dr. Smith</p>
                        <button>Join Session</button>
                    </div>

                    <div class="session-type">
                        <h3>Session Type</h3>
                        <p><strong>Lecture</strong></p>
                        <p>Duration: 1.5 hours</p>
                    </div>
                </div>

                <!-- Calendar View -->
                <div class="calendar-view">
                    <h3>Session Calendar</h3>
                    <div class="calendar">
                        <p>Month View</p>
                        <div class="calendar-day" onmouseover="showSessionDetails()">
                            <p>25</p>
                            <p>Physics Lecture</p>
                        </div>
                    </div>
                </div>

                <!-- Upcoming Exam Details -->
                <div class="exam-details">
                    <h3>Upcoming Exam</h3>
                    <p><strong>Exam Date:</strong> March 15, 2025</p>
                    <p><strong>Time:</strong> 2:00 PM</p>
                    <p><strong>Location:</strong> Room 101</p>
                    <p><strong>Exam Type:</strong> Multiple Choice</p>
                    <button>View Preparation Materials</button>
                </div>

                <!-- Session Reminders -->
                <div class="session-reminders">
                    <h3>Session Reminders</h3>
                    <p>Reminder: "1 hour until your Physics lecture." <button>Set Reminder</button></p>
                    <p>Attendance Requirement: "Mandatory for this session."</p>
                </div>

                <!-- Session Status Updates -->
                <div class="session-updates">
                    <h3>Session Updates</h3>
                    <p>Changes: "Lecture rescheduled to 11:00 AM." <button>View Details</button></p>
                </div>
            </div>

            <!-- Additional Section for Polls and Interaction -->
            <div class="section" id="interaction">
                <h2>Session Feedback & Interaction</h2>
                <p><strong>Pre-session Survey:</strong> Fill out the short survey for your upcoming session.</p>
                <button>Take Survey</button>
                <p><strong>Session Preview:</strong> Review the agenda of your next lecture.</p>
                <button>View Session Preview</button>
            </div>
        </div>
    </div>

    <!-- JavaScript for functionality -->
    <script>
        function showSessionDetails() {
            alert("Session: Introduction to Physics - Time: 10:00 AM - Location: Room 204");
        }
    </script>

    <style>
        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .dashboard-container {
            display: flex;
        }

        .sidebar {
            width: 250px;
            background-color: #333;
            color: white;
            padding: 15px;
        }

        .sidebar h2 {
            font-size: 1.5em;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 10px 0;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            font-size: 1.1em;
        }

        .main-content {
            flex-grow: 1;
            padding: 20px;
        }

        .section {
            margin-bottom: 30px;
        }

        .session-overview,
        .calendar-view,
        .exam-details,
        .session-reminders,
        .session-updates {
            background-color: #ffffff;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .session-overview div,
        .calendar-view div,
        .exam-details div,
        .session-reminders div,
        .session-updates div {
            margin-bottom: 10px;
        }

        .button {
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .calendar {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
        }

        .calendar-day {
            background-color: #e0e0e0;
            width: 60px;
            padding: 10px;
            text-align: center;
            cursor: pointer;
        }

        .calendar-day:hover {
            background-color: #007bff;
            color: white;
        }

    </style>
</body>
</html>
