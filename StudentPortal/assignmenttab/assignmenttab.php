<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f6f9;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        header {
            background-color: #0073e6;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .assignment-list, .past-assignments {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap: 20px;
            margin-top: 30px;
        }
        .assignment-card, .past-assignment-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            text-align: left;
            position: relative;
        }
        .assignment-card h3, .past-assignment-card h3 {
            margin: 0;
            font-size: 18px;
            color: #333;
        }
        .assignment-card p, .past-assignment-card p {
            font-size: 14px;
            color: #555;
        }
        .status {
            font-weight: bold;
            padding: 5px;
            text-align: center;
            border-radius: 4px;
        }
        .status.completed {
            background-color: #4CAF50;
            color: white;
        }
        .status.pending {
            background-color: #FFC107;
            color: white;
        }
        .status.late {
            background-color: #F44336;
            color: white;
        }
        .due-date {
            margin-top: 10px;
            font-size: 12px;
            color: #777;
        }
        .submit-btn {
            position: absolute;
            bottom: 15px;
            right: 15px;
            background-color: #0073e6;
            color: white;
            border: none;
            padding: 8px 15px;
            cursor: pointer;
            border-radius: 4px;
        }
        .submit-btn:hover {
            background-color: #005bb5;
        }
        .notification {
            background-color: #ff9800;
            color: white;
            padding: 10px;
            border-radius: 4px;
            margin: 20px 0;
            text-align: center;
        }
        .filter-container {
            margin-top: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .search-bar {
            padding: 8px;
            width: 200px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
        .select-filter {
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>

    <header>
        <h1>Student Assignment Dashboard</h1>
    </header>

    <div class="container">
        <div class="notification">
            <p>Reminder: Your upcoming assignment deadline is in 2 days!</p>
        </div>

        <div class="filter-container">
            <input class="search-bar" type="text" placeholder="Search assignments...">
            <select class="select-filter">
                <option value="all">All Assignments</option>
                <option value="completed">Completed</option>
                <option value="pending">Pending</option>
                <option value="late">Late</option>
            </select>
        </div>

        <h2>Current and Upcoming Assignments</h2>
        <div class="assignment-list">
            <!-- Assignment 1 -->
            <div class="assignment-card">
                <h3>Essay on Climate Change</h3>
                <p>Write a 1000-word essay on the effects of climate change.</p>
                <div class="status pending">Pending</div>
                <div class="due-date">Due in 3 days</div>
                <button class="submit-btn">Submit Assignment</button>
            </div>

            <!-- Assignment 2 -->
            <div class="assignment-card">
                <h3>Math Project</h3>
                <p>Complete the math project on algebraic equations.</p>
                <div class="status completed">Completed</div>
                <div class="due-date">Completed on Jan 30, 2025</div>
                <button class="submit-btn" disabled>Submitted</button>
            </div>

            <!-- Assignment 3 -->
            <div class="assignment-card">
                <h3>History Quiz</h3>
                <p>Complete the quiz on World War II.</p>
                <div class="status late">Late</div>
                <div class="due-date">Due 5 days ago</div>
                <button class="submit-btn" disabled>Late Submission</button>
            </div>

            <!-- Assignment 4 -->
            <div class="assignment-card">
                <h3>Literature Reading</h3>
                <p>Read the chapters on Victorian literature.</p>
                <div class="status pending">Pending</div>
                <div class="due-date">Due in 7 days</div>
                <button class="submit-btn">Submit Assignment</button>
            </div>
        </div>

        <h2>Past Assignments</h2>
        <div class="past-assignments">
            <!-- Past Assignment 1 -->
            <div class="past-assignment-card">
                <h3>Science Paper</h3>
                <p>Explaining Newton's Laws of Motion</p>
                <div class="due-date">Completed on Jan 25, 2025</div>
            </div>

            <!-- Past Assignment 2 -->
            <div class="past-assignment-card">
                <h3>Geography Fieldwork</h3>
                <p>Research on local rivers</p>
                <div class="due-date">Completed on Jan 28, 2025</div>
            </div>
        </div>
    </div>

    <script>
        // JavaScript for filtering assignments
        const searchBar = document.querySelector('.search-bar');
        const filterSelect = document.querySelector('.select-filter');
        const assignmentCards = document.querySelectorAll('.assignment-card');
        
        searchBar.addEventListener('input', filterAssignments);
        filterSelect.addEventListener('change', filterAssignments);

        function filterAssignments() {
            const searchTerm = searchBar.value.toLowerCase();
            const selectedFilter = filterSelect.value;

            assignmentCards.forEach(card => {
                const title = card.querySelector('h3').textContent.toLowerCase();
                const status = card.querySelector('.status').textContent.toLowerCase();

                let matchesSearch = title.includes(searchTerm);
                let matchesFilter = (selectedFilter === 'all') || (status === selectedFilter);

                if (matchesSearch && matchesFilter) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>

</body>
</html>
