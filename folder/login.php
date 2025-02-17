<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

// Check if the user is already logged in, redirect to the dashboard
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header("Location: dashboard.php");
    exit;
}

// Check if the login form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_username = 'admin'; // Replace with actual admin username
    $admin_password = 'admin123'; // Replace with actual admin password
    
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    // Check if the username and password match
    if ($input_username == $admin_username && $input_password == $admin_password) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        $error_message = "Invalid credentials!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #00bcd4, #1a73e8);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: #fff;
            padding: 40px 50px;
            border-radius: 10px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .input-field {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .input-field:focus {
            outline: none;
            border-color: #1a73e8;
        }

        .login-btn {
            width: 100%;
            padding: 15px;
            background-color: #1a73e8;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-btn:hover {
            background-color: #0077b6;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-bottom: 20px;
        }

        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(-30px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        footer {
            position: absolute;
            bottom: 20px;
            color: #fff;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Admin Login</h2>

        <?php if (isset($error_message)) { echo "<p class='error-message'>$error_message</p>"; } ?>

        <form method="POST">
            <input type="text" name="username" class="input-field" placeholder="Username" required>
            <input type="password" name="password" class="input-field" placeholder="Password" required>
            <button type="submit" class="login-btn">Login</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2025 [Rajiv Gandhi Nanded]. All rights reserved. Design by :- Snehalata kulkarni & Lalnandan Yetalkar</p>
    </footer>

</body>
</html>
