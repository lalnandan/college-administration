<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Chart.js CDN -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #333;
            color: white;
            padding: 15px;
            text-align: center;
        }
        .navbar h1 {
            margin: 0;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            margin: 20px;
        }
        .card {
            background-color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px;
            border-radius: 8px;
            flex: 1;
            min-width: 300px;
        }
        .card h3 {
            margin-top: 0;
        }
        .card .progress-bar {
            height: 10px;
            background-color: #ddd;
            border-radius: 5px;
            margin: 10px 0;
        }
        .card .progress-bar span {
            display: block;
            height: 100%;
            border-radius: 5px;
        }
        .chart-container {
            height: 200px;
            margin: 20px 0;
        }
        .btn {
            background-color: #28a745;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .btn:hover {
            background-color: #218838;
        }
        .form-group {
            margin: 15px 0;
        }
        .form-group input, .form-group textarea, .form-group select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table th, .table td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Student Attendance Dashboard</h1>
    </div>

    <div class="container">
        <div class="card">
            <h3>Attendance Overview 📊</h3>
            <p>Monthly Attendance: 85%</p>
            <p>Semester Attendance: 88%</p>
            <p>Total Present: 24 days</p>
            <p>Total Absent: 4 days</p>
            <div class="progress-bar">
                <span style="width: 85%; background-color: #28a745;"></span>
            </div>
            <div class="chart-container">
                <canvas id="attendanceChart"></canvas>
            </div>
        </div>

        <div class="card">
            <h3>Course-Wise Attendance 📚</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Course</th>
                        <th>Attendance</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mathematics</td>
                        <td>90%</td>
                    </tr>
                    <tr>
                        <td>Physics</td>
                        <td>80%</td>
                    </tr>
                    <tr>
                        <td>Computer Science</td>
                        <td>85%</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="card">
            <h3>Leave Application 📝</h3>
            <form>
                <div class="form-group">
                    <label for="leave-type">Leave Type:</label>
                    <select id="leave-type">
                        <option value="medical">Medical</option>
                        <option value="personal">Personal</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="leave-reason">Reason:</label>
                    <textarea id="leave-reason" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="medical-cert">Upload Medical Certificate (if applicable):</label>
                    <input type="file" id="medical-cert">
                </div>
                <button type="submit" class="btn">Submit Leave Application</button>
            </form>
        </div>

        <div class="card">
            <h3>Attendance Alerts & Notifications 🚨</h3>
            <p>Low Attendance Warning: <strong>Physics (80%)</strong></p>
            <p>Upcoming Holidays: <strong>Winter Break (Feb 15 - Feb 20)</strong></p>
            <p>Suggested Improvement: Attend at least 5 more classes this month to meet the requirement.</p>
        </div>
    </div>

    <script>
        // Chart.js Script to create a pie chart for Attendance Overview
        var ctx = document.getElementById('attendanceChart').getContext('2d');
        var attendanceChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Present', 'Absent'],
                datasets: [{
                    label: 'Attendance',
                    data: [24, 4], // Adjust this data dynamically
                    backgroundColor: ['#28a745', '#dc3545'],
                    borderColor: ['#28a745', '#dc3545'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw + ' days';
                            }
                        }
                    }
                }
            }
        });
    </script>

</body>
</html>
