<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment Solutions</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f8f9fa, #e3f2fd);
            color: #333;
            display: flex;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #343a40;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            box-shadow: 5px 0 15px rgba(0, 0, 0, 0.3);
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .sidebar h2 {
            color: #f8d210;
            margin-bottom: 20px;
        }
        .sidebar a {
            text-decoration: none;
            color: white;
            font-weight: 500;
            padding: 10px 15px;
            display: block;
            transition: 0.3s;
            border-radius: 5px;
        }
        .sidebar a:hover {
            background: #f8d210;
            color: black;
        }
        .main-content {
            margin-left: 270px;
            padding: 30px;
            flex-grow: 1;
            width: calc(100% - 250px);
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .assignment-container, .upload-section {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            width: 80%;
            max-width: 900px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            animation: fadeIn 1s ease-in-out;
        }
        h2, h3 {
            text-align: center;
            color: #343a40;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            color: black;
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background: #f8d210;
            color: black;
        }
        tr:hover {
            background: rgba(248, 210, 16, 0.1);
        }
        .upload-section textarea, .upload-section input, .upload-section button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
        }
        .upload-section button {
            background: #f8d210;
            color: black;
            font-weight: bold;
            cursor: pointer;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Student Portal</h2>
        <a href="#">Dashboard</a>
        <a href="#">Assignments</a>
        <a href="#">Solutions</a>
        <a href="#">Grades</a>
        <a href="#">Profile</a>
        <a href="#">Logout</a>
    </div>
    
    <div class="main-content">
        <div class="assignment-container">
            <h2>Assignment Solutions</h2>
            <table>
                <tr>
                    <th>Assignment</th>
                    <th>Solution</th>
                    <th>File</th>
                    <th>Status</th>
                    <th>Submitted On</th>
                </tr>
                <tr>
                    <td>Math Assignment 1</td>
                    <td>Solution for algebra problems.</td>
                    <td><a href="#">Download</a></td>
                    <td>Reviewed</td>
                    <td>2025-02-20</td>
                </tr>
                <tr>
                    <td>Physics Assignment 2</td>
                    <td>Explanation of Newton's Laws.</td>
                    <td><a href="#">Download</a></td>
                    <td>Pending</td>
                    <td>2025-02-18</td>
                </tr>
            </table>
        </div>
        
        <div class="upload-section">
            <h3>Submit Your Solution</h3>
            <form action="#" method="post" enctype="multipart/form-data">
                <textarea name="solution_text" placeholder="Enter solution details..."></textarea>
                <input type="file" name="solution_file" accept=".pdf,.docx,.txt,.jpg,.png">
                <button type="submit">Submit Solution</button>
            </form>
        </div>
    </div>
</body>
</html>
