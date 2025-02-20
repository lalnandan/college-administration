<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Tools</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .dashboard-container {
            display: flex;
            height: 100vh;
        }
        .sidebar {
            width: 250px;
            background: #333;
            color: white;
            padding: 20px;
        }
        .sidebar h2 {
            text-align: center;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            margin: 15px 0;
        }
        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            background: #444;
            border-radius: 5px;
            transition: 0.3s;
        }
        .sidebar ul li a:hover {
            background: #555;
        }
        .content {
            flex: 1;
            padding: 20px;
            background: white;
            overflow-y: auto;
        }
        .animated-header {
            font-size: 24px;
            text-align: center;
            padding: 20px;
            background: linear-gradient(to right, #ff6a00, #ee0979);
            color: white;
            border-radius: 10px;
            animation: fadeIn 1s ease-in-out;
        }
        #tools-dashboard {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .tool-card {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .tool-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <nav class="sidebar">
            <h2>Study Tools</h2>
            <ul>
                <li><a href="#calculator">Calculator</a></li>
                <li><a href="#simulations">Simulations</a></li>
                <li><a href="#notes">Notes</a></li>
                <li><a href="#flashcards">Flashcards</a></li>
                <li><a href="#mindmaps">Mind Maps</a></li>
                <li><a href="#dictionary">Dictionary</a></li>
                <li><a href="#unitconverter">Unit Converter</a></li>
            </ul>
        </nav>
        <main class="content">
            <header class="animated-header">Interactive Study Tools</header>
            <section id="tools-dashboard">
                <div class="tool-card" id="calculator">
                    <h3>Calculator</h3>
                    <p>Perform quick calculations</p>
                </div>
                <div class="tool-card" id="simulations">
                    <h3>Simulations</h3>
                    <p>Interactive learning experiences</p>
                </div>
                <div class="tool-card" id="notes">
                    <h3>Notes</h3>
                    <p>Write and save your study notes</p>
                </div>
                <div class="tool-card" id="flashcards">
                    <h3>Flashcards</h3>
                    <p>Enhance memory with quick reviews</p>
                </div>
                <div class="tool-card" id="mindmaps">
                    <h3>Mind Maps</h3>
                    <p>Organize concepts visually</p>
                </div>
                <div class="tool-card" id="dictionary">
                    <h3>Dictionary</h3>
                    <p>Find word meanings and definitions</p>
                </div>
                <div class="tool-card" id="unitconverter">
                    <h3>Unit Converter</h3>
                    <p>Convert between different units</p>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
