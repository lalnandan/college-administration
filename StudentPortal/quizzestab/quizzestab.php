<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard - Quizzes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
        }
        .header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
        }
        .quiz-list, .quiz-results, .quiz-filters {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin: 20px 0;
        }
        .quiz-card {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            width: 100%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .quiz-card:hover {
            transform: translateY(-5px);
        }
        .progress-bar {
            height: 15px;
            border-radius: 8px;
            background-color: #f0f0f0;
            margin: 10px 0;
        }
        .progress-bar span {
            display: block;
            height: 100%;
            border-radius: 8px;
        }
        .completed {
            background-color: green;
        }
        .in-progress {
            background-color: yellow;
        }
        .late {
            background-color: red;
        }
        .quiz-filters input, .quiz-filters select {
            padding: 10px;
            border-radius: 5px;
            margin: 5px;
            border: 1px solid #ccc;
        }
        .timeline {
            margin-top: 40px;
            width: 100%;
            position: relative;
        }
        .timeline-bar {
            position: absolute;
            top: 0;
            left: 0;
            height: 4px;
            background-color: #4caf50;
            width: 30%;
        }
        .timeline .quiz-point {
            position: absolute;
            top: 20px;
            width: 10px;
            height: 10px;
            background-color: #4caf50;
            border-radius: 50%;
        }
        .countdown-timer {
            font-size: 1.5em;
            color: #e91e63;
        }
        .quiz-results {
            width: 100%;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            margin-top: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .quiz-chart {
            width: 100%;
            height: 300px;
            background-color: #e9e9e9;
            margin-top: 20px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Student Dashboard - Quizzes</h1>
    </div>

    <div class="container">
        <div class="quiz-filters">
            <input type="text" id="search" placeholder="Search Quizzes">
            <select id="filterStatus">
                <option value="all">All Status</option>
                <option value="completed">Completed</option>
                <option value="in-progress">In Progress</option>
                <option value="late">Late</option>
            </select>
        </div>

        <!-- Quiz List Section -->
        <div class="quiz-list">
            <div class="quiz-card">
                <h3>Math Quiz: Algebra</h3>
                <p>Due in 3 days</p>
                <div class="progress-bar">
                    <span class="in-progress" style="width: 50%;"></span>
                </div>
                <button onclick="startQuiz('Math Quiz: Algebra')">Start Quiz</button>
            </div>

            <div class="quiz-card">
                <h3>History Quiz: World War II</h3>
                <p>Time Remaining: <span class="countdown-timer">00:10:00</span></p>
                <div class="progress-bar">
                    <span class="in-progress" style="width: 80%;"></span>
                </div>
                <button onclick="resumeQuiz('History Quiz: World War II')">Resume Quiz</button>
            </div>

            <div class="quiz-card">
                <h3>Chemistry Quiz: Elements</h3>
                <p>Completed: 85%</p>
                <button onclick="reviewResults('Chemistry Quiz: Elements')">Review Results</button>
            </div>
        </div>

        <!-- Timeline Section -->
        <div class="timeline">
            <div class="timeline-bar"></div>
            <div class="quiz-point" style="left: 0%;"></div>
            <div class="quiz-point" style="left: 50%;"></div>
            <div class="quiz-point" style="left: 100%;"></div>
        </div>

        <!-- Quiz Results Section -->
        <div class="quiz-results">
            <h3>Quiz Results - Chemistry Quiz: Elements</h3>
            <p>Score: 85%</p>
            <div class="quiz-chart" id="chart"></div>
            <p>Time Taken: 20 minutes</p>
            <p>Correct Answers: 17/20</p>
        </div>
    </div>

    <script>
        // Simulating functions
        function startQuiz(quizTitle) {
            alert(`Starting quiz: ${quizTitle}`);
        }

        function resumeQuiz(quizTitle) {
            alert(`Resuming quiz: ${quizTitle}`);
        }

        function reviewResults(quizTitle) {
            alert(`Reviewing results of: ${quizTitle}`);
        }

        // Simple Timer Simulation
        let countdown = document.querySelector(".countdown-timer");
        let timeLeft = 600; // 10 minutes in seconds

        function updateTimer() {
            if (timeLeft <= 0) {
                clearInterval(timerInterval);
                countdown.innerHTML = "Time's up!";
            } else {
                let minutes = Math.floor(timeLeft / 60);
                let seconds = timeLeft % 60;
                countdown.innerHTML = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
                timeLeft--;
            }
        }
        let timerInterval = setInterval(updateTimer, 1000);
    </script>

</body>
</html>
