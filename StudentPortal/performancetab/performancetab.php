<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard - Performance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .section-header {
            font-size: 1.5rem;
            font-weight: bold;
            margin-top: 20px;
        }
        .card {
            margin-bottom: 20px;
        }
        .progress-bar {
            height: 25px;
        }
        .chart-container {
            height: 400px;
        }
        .tab-content {
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <!-- Sidebar Navigation (for better UI) -->
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="#overview" class="list-group-item list-group-item-action" data-bs-toggle="tab">Overview</a>
                <a href="#course-performance" class="list-group-item list-group-item-action" data-bs-toggle="tab">Course-Wise Performance</a>
                <a href="#assignments" class="list-group-item list-group-item-action" data-bs-toggle="tab">Assignments & Exams</a>
                <a href="#attendance" class="list-group-item list-group-item-action" data-bs-toggle="tab">Attendance Impact</a>
                <a href="#goal-setting" class="list-group-item list-group-item-action" data-bs-toggle="tab">Goal Setting</a>
                <a href="#feedback" class="list-group-item list-group-item-action" data-bs-toggle="tab">Feedback</a>
            </div>
        </div>
        <div class="col-md-9">
            <!-- Tab Content -->
            <div class="tab-content">
                <!-- Grades Overview Tab -->
                <div class="tab-pane fade show active" id="overview">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="section-header">Grades Overview</h5>
                            <p><strong>Current GPA:</strong> 3.85</p>
                            <p><strong>Overall Grade Summary:</strong> A in Math, B+ in History, A- in Physics</p>
                            <div class="chart-container" id="grade-trends">
                                <!-- Placeholder for Grade Trends Chart -->
                                <canvas id="gradeChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course-Wise Performance Tab -->
                <div class="tab-pane fade" id="course-performance">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="section-header">Course-Wise Performance</h5>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Course</th>
                                        <th>Grade</th>
                                        <th>Attendance</th>
                                        <th>Assignments</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mathematics</td>
                                        <td>A</td>
                                        <td>90%</td>
                                        <td>80% (Excellent)</td>
                                    </tr>
                                    <tr>
                                        <td>History</td>
                                        <td>B+</td>
                                        <td>85%</td>
                                        <td>75% (Good)</td>
                                    </tr>
                                    <tr>
                                        <td>Physics</td>
                                        <td>A-</td>
                                        <td>80%</td>
                                        <td>85% (Good)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Assignments & Exams Tab -->
                <div class="tab-pane fade" id="assignments">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="section-header">Assignments & Exams</h5>
                            <ul>
                                <li>Assignment 1: Math - A (Submitted)</li>
                                <li>Midterm Exam: History - B+ (Feedback: Needs Improvement)</li>
                                <li>Final Exam: Physics - A- (Feedback: Good Performance)</li>
                            </ul>
                            <h6>Upcoming Deadlines:</h6>
                            <ul>
                                <li>Math Assignment 2 - Due: Feb 15</li>
                                <li>History Midterm Exam - Due: Feb 20</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Attendance Impact Tab -->
                <div class="tab-pane fade" id="attendance">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="section-header">Attendance Impact on Performance</h5>
                            <div class="chart-container" id="attendance-impact">
                                <!-- Placeholder for Attendance vs Grades Chart -->
                                <canvas id="attendanceChart"></canvas>
                            </div>
                            <p><strong>Low Attendance Alert:</strong> Your attendance in Physics is below 80%, which may affect your final grade.</p>
                        </div>
                    </div>
                </div>

                <!-- Goal Setting Tab -->
                <div class="tab-pane fade" id="goal-setting">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="section-header">Goal Setting & Tracking</h5>
                            <p><strong>Target GPA:</strong> 3.90</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80% Achieved</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feedback Tab -->
                <div class="tab-pane fade" id="feedback">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="section-header">Instructor & Peer Feedback</h5>
                            <p><strong>Instructor Feedback:</strong> Good progress overall in Mathematics. Consider revising Chapter 5 for better understanding.</p>
                            <p><strong>Peer Evaluation:</strong> Group Project - Excellent collaboration and research.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Example Chart for Grades Trend
    const ctxGrade = document.getElementById('gradeChart').getContext('2d');
    const gradeChart = new Chart(ctxGrade, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
            datasets: [{
                label: 'Math Grades',
                data: [85, 88, 90, 93, 95],
                borderColor: 'rgba(75, 192, 192, 1)',
                fill: false
            }]
        }
    });

    // Example Chart for Attendance vs Grades
    const ctxAttendance = document.getElementById('attendanceChart').getContext('2d');
    const attendanceChart = new Chart(ctxAttendance, {
        type: 'bar',
        data: {
            labels: ['Math', 'History', 'Physics'],
            datasets: [{
                label: 'Attendance %',
                data: [95, 85, 75],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        }
    });
</script>

</body>
</html>
