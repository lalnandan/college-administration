<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Test Results Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            margin: auto;
            padding-top: 20px;
        }
        .header {
            text-align: center;
            background-color: #007BFF;
            color: white;
            padding: 20px;
        }
        .test-list, .test-performance {
            margin: 20px 0;
        }
        .test-card {
            background-color: white;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .test-card h3 {
            margin: 0;
        }
        .status {
            padding: 5px 10px;
            border-radius: 5px;
            color: white;
        }
        .completed { background-color: green; }
        .failed { background-color: red; }
        .pending { background-color: yellow; color: black; }
        .filter-bar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .filter-bar select, .filter-bar input {
            padding: 5px;
            margin-right: 10px;
        }
        .progress-bar {
            height: 20px;
            background-color: #ddd;
            border-radius: 10px;
            margin-top: 10px;
        }
        .progress-bar span {
            display: block;
            height: 100%;
            border-radius: 10px;
        }
        .completed-bar { background-color: green; }
        .pie-chart-container, .bar-chart-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .chart {
            width: 48%;
        }
        .chart canvas {
            width: 100%;
            height: 200px;
        }
        .button {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Test Results Dashboard</h1>
    </div>

    <div class="container">
        <!-- Filter Bar -->
        <div class="filter-bar">
            <input type="text" id="search" placeholder="Search by Test Name" oninput="filterTests()">
            <select id="filter-status" onchange="filterTests()">
                <option value="">All Status</option>
                <option value="completed">Completed</option>
                <option value="failed">Failed</option>
                <option value="pending">Pending</option>
            </select>
            <select id="sort-options" onchange="sortTests()">
                <option value="date">Sort by Date</option>
                <option value="score">Sort by Score</option>
            </select>
        </div>

        <!-- Test List -->
        <div class="test-list" id="test-list">
            <!-- Test Cards (dynamic content) -->
        </div>

        <!-- Performance Summary -->
        <div class="test-performance">
            <h2>Performance Summary</h2>
            <div>
                <p><strong>Overall Score: </strong> 80%</p>
                <div class="progress-bar">
                    <span class="completed-bar" style="width: 80%;"></span>
                </div>
            </div>

            <div class="pie-chart-container">
                <div class="chart">
                    <h3>Score Breakdown</h3>
                    <canvas id="score-pie-chart"></canvas>
                </div>
                <div class="chart">
                    <h3>Question Type Performance</h3>
                    <canvas id="question-bar-chart"></canvas>
                </div>
            </div>

            <button class="button" onclick="downloadResults()">Download Results</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Sample test data
        const tests = [
            { name: "Math Test 1", date: "2025-01-20", score: 85, status: "completed" },
            { name: "Physics Midterm", date: "2025-01-22", score: 72, status: "completed" },
            { name: "Final Exam", date: "2025-01-25", score: 90, status: "completed" },
            { name: "Chemistry Quiz", date: "2025-01-27", score: 65, status: "failed" },
            { name: "English Essay", date: "2025-02-01", score: 95, status: "pending" },
        ];

        // Function to render test list
        function renderTestList(tests) {
            const testListElement = document.getElementById("test-list");
            testListElement.innerHTML = "";
            tests.forEach(test => {
                const testCard = document.createElement("div");
                testCard.className = "test-card";

                testCard.innerHTML = `
                    <div>
                        <h3>${test.name}</h3>
                        <p>Date: ${test.date}</p>
                    </div>
                    <div>
                        <p>Score: ${test.score}%</p>
                        <div class="status ${test.status}">${test.status.charAt(0).toUpperCase() + test.status.slice(1)}</div>
                    </div>
                `;

                testListElement.appendChild(testCard);
            });
        }

        // Filter Tests based on user input
        function filterTests() {
            const searchValue = document.getElementById("search").value.toLowerCase();
            const statusValue = document.getElementById("filter-status").value;

            const filteredTests = tests.filter(test => {
                const matchesSearch = test.name.toLowerCase().includes(searchValue);
                const matchesStatus = statusValue ? test.status === statusValue : true;

                return matchesSearch && matchesStatus;
            });

            renderTestList(filteredTests);
        }

        // Sort Tests based on user input
        function sortTests() {
            const sortValue = document.getElementById("sort-options").value;

            const sortedTests = [...tests].sort((a, b) => {
                if (sortValue === "date") {
                    return new Date(a.date) - new Date(b.date);
                } else if (sortValue === "score") {
                    return b.score - a.score;
                }
            });

            renderTestList(sortedTests);
        }

        // Download test results
        function downloadResults() {
            const doc = new Blob([JSON.stringify(tests)], { type: "application/json" });
            const link = document.createElement("a");
            link.href = URL.createObjectURL(doc);
            link.download = "test_results.json";
            link.click();
        }

        // Chart.js setup for pie chart and bar chart
        const scorePieChart = new Chart(document.getElementById("score-pie-chart"), {
            type: "pie",
            data: {
                labels: ["Multiple Choice", "Essay", "Short Answer"],
                datasets: [{
                    data: [60, 30, 10],
                    backgroundColor: ["#007BFF", "#28a745", "#ffc107"]
                }]
            }
        });

        const questionBarChart = new Chart(document.getElementById("question-bar-chart"), {
            type: "bar",
            data: {
                labels: ["Multiple Choice", "Essay", "Short Answer"],
                datasets: [{
                    label: "Question Type Performance",
                    data: [80, 70, 60],
                    backgroundColor: "#007BFF"
                }]
            }
        });

        // Initialize the test list rendering
        renderTestList(tests);
    </script>
</body>
</html>
