<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard - Study Material</title>
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
        .card-body a {
            color: #007bff;
        }
        .card-body a:hover {
            text-decoration: underline;
        }
        .material-links {
            margin-top: 10px;
        }
        .material-links a {
            display: block;
            margin-bottom: 8px;
        }
        .progress-bar {
            height: 25px;
        }
        .search-container {
            margin: 20px 0;
        }
        .dropdown-menu a {
            padding: 10px;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <!-- Sidebar Navigation -->
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="#overview" class="list-group-item list-group-item-action" data-bs-toggle="tab">Course-Wise Material</a>
                <a href="#assignments" class="list-group-item list-group-item-action" data-bs-toggle="tab">Assignments & Projects</a>
                <a href="#videos" class="list-group-item list-group-item-action" data-bs-toggle="tab">Lecture Videos</a>
                <a href="#exam-prep" class="list-group-item list-group-item-action" data-bs-toggle="tab">Exam Preparation</a>
                <a href="#notes" class="list-group-item list-group-item-action" data-bs-toggle="tab">Notes & Study Guides</a>
                <a href="#resources" class="list-group-item list-group-item-action" data-bs-toggle="tab">Supplementary Resources</a>
                <a href="#collaboration" class="list-group-item list-group-item-action" data-bs-toggle="tab">Collaborative Learning</a>
                <a href="#bookmarks" class="list-group-item list-group-item-action" data-bs-toggle="tab">Bookmarks & Favorites</a>
            </div>
        </div>

        <div class="col-md-9">
            <!-- Tab Content -->
            <div class="tab-content">
                <!-- Course-Wise Study Material Tab -->
                <div class="tab-pane fade show active" id="overview">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="section-header">Course-Wise Study Material</h5>
                            <div class="material-links">
                                <h6>Mathematics</h6>
                                <a href="#">Lecture Notes (PDF)</a>
                                <a href="#">Recommended Reading</a>
                                <a href="#">Course Syllabus</a>

                                <h6>History</h6>
                                <a href="#">Lecture Notes (Word)</a>
                                <a href="#">Textbook: History 101</a>
                                <a href="#">Course Syllabus</a>

                                <h6>Physics</h6>
                                <a href="#">Lecture Notes (PDF)</a>
                                <a href="#">Recommended Articles</a>
                                <a href="#">Course Syllabus</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Assignments & Projects Tab -->
                <div class="tab-pane fade" id="assignments">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="section-header">Assignments & Project Guidelines</h5>
                            <ul>
                                <li><strong>Math Assignment 1:</strong> <a href="#">View Instructions</a> - Deadline: Feb 10</li>
                                <li><strong>History Project:</strong> <a href="#">View Guidelines</a> - Deadline: Mar 5</li>
                                <li><strong>Physics Lab Report:</strong> <a href="#">View Instructions</a> - Deadline: Feb 15</li>
                            </ul>
                            <h6>Submission Links:</h6>
                            <ul>
                                <li><a href="#">Submit Math Assignment</a> - Status: Pending</li>
                                <li><a href="#">Submit History Project</a> - Status: Submitted</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Lecture Videos Tab -->
                <div class="tab-pane fade" id="videos">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="section-header">Lecture Videos & Recordings</h5>
                            <h6>Mathematics</h6>
                            <a href="#">Week 1 - Introduction to Calculus (Video)</a>
                            <a href="#">Week 2 - Limits and Continuity (Video)</a>

                            <h6>History</h6>
                            <a href="#">Lecture 1 - Ancient Civilizations (Video)</a>
                            <a href="#">Lecture 2 - Middle Ages (Video)</a>

                            <h6>Physics</h6>
                            <a href="#">Week 1 - Mechanics (Video)</a>
                            <a href="#">Week 2 - Electromagnetism (Video)</a>
                        </div>
                    </div>
                </div>

                <!-- Exam Preparation Tab -->
                <div class="tab-pane fade" id="exam-prep">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="section-header">Exam Preparation Materials</h5>
                            <h6>Past Papers:</h6>
                            <a href="#">Mathematics Midterm 2023</a>
                            <a href="#">History Final Exam 2022</a>
                            <a href="#">Physics Lab Test 2023</a>

                            <h6>Practice Tests:</h6>
                            <a href="#">Math Quiz 1</a>
                            <a href="#">History Multiple Choice Practice</a>

                            <h6>Exam Guidelines:</h6>
                            <a href="#">Math Exam Format</a>
                            <a href="#">Physics Lab Instructions</a>
                        </div>
                    </div>
                </div>

                <!-- Notes & Study Guides Tab -->
                <div class="tab-pane fade" id="notes">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="section-header">Notes & Study Guides</h5>
                            <h6>Instructor Notes:</h6>
                            <a href="#">Mathematics - Chapter 1 Review</a>
                            <a href="#">History - World War II Overview</a>
                            <a href="#">Physics - Motion and Forces Summary</a>

                            <h6>Study Guides:</h6>
                            <a href="#">Mathematics - Calculus Study Guide</a>
                            <a href="#">History - The Renaissance Study Guide</a>
                            <a href="#">Physics - Quantum Mechanics Guide</a>
                        </div>
                    </div>
                </div>

                <!-- Supplementary Resources Tab -->
                <div class="tab-pane fade" id="resources">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="section-header">Supplementary Learning Resources</h5>
                            <h6>Online Courses:</h6>
                            <a href="#">Coursera - Advanced Calculus</a>
                            <a href="#">edX - Introduction to World History</a>

                            <h6>E-books & Journals:</h6>
                            <a href="#">Digital Textbook: Calculus for Beginners</a>
                            <a href="#">Research Paper: History of the French Revolution</a>

                            <h6>External Resources:</h6>
                            <a href="#">Khan Academy: Calculus Videos</a>
                            <a href="#">Physics Forums: Ask Questions and Discuss</a>
                        </div>
                    </div>
                </div>

                <!-- Collaborative Learning Tab -->
                <div class="tab-pane fade" id="collaboration">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="section-header">Collaborative Learning</h5>
                            <a href="#">Discussion Forum: Math Topics</a>
                            <a href="#">Group Study: History Project</a>
                            <a href="#">Peer Sharing: Physics Experiment</a>
                        </div>
                    </div>
                </div>

                <!-- Bookmarks & Favorites Tab -->
                <div class="tab-pane fade" id="bookmarks">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="section-header">Bookmarks & Favorites</h5>
                            <ul>
                                <li><a href="#">Favorite Math Lecture Notes</a></li>
                                <li><a href="#">Physics Study Guide</a></li>
                                <li><a href="#">History Final Exam Preparation</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
