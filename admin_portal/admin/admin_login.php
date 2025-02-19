<?php

session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $host = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $database = "admin"; 

    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $admin_username = $_POST['username'];
    $admin_password = $_POST['password'];

    // Prepare SQL query to check if the username exists
    $sql = "SELECT * FROM admins WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $admin_username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if admin username exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Debugging: Check what password is stored
        // echo "Stored hashed password: " . $row['password'];

        // Verify the password using password_verify() (against the hashed password in the database)
        if (password_verify($admin_password, $row['password'])) {
            // Admin login successful, start session and redirect to dashboard
            $_SESSION['admin_logged_in'] = true;
            header("Location: /college/admin_portal/admin/admin_dashboard.php"); // Redirect to admin dashboard
            exit();
        } else {
            // Invalid password
            $error_message = "Invalid Username or Password!";
        }
    } else {
        // Invalid username
        $error_message = "Invalid Username or Password!";
    }

    // Close database connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #6e7aaf, #c0b5db);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }
        .login-container h2 {
            color: #6e7aaf;
            margin-bottom: 20px;
        }
        .input-field {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 2px solid #ddd;
            font-size: 16px;
            transition: border 0.3s;
        }
        .input-field:focus {
            border-color: #6e7aaf;
            outline: none;
        }
        .login-btn {
            width: 100%;
            padding: 12px;
            background: #6e7aaf;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s;
        }
        .login-btn:hover {
            background: #5b6494;
        }
        .error-message {
            color: red;
            margin-bottom: 10px;
            font-size: 14px;
        }
        .forgot-password {
            color: #6e7aaf;
            font-size: 14px;
            text-decoration: none;
            display: block;
            margin-top: 10px;
        }
        .forgot-password:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Admin Login</h2>

        <!-- Display error message if credentials are incorrect -->
        <?php if (!empty($error_message)): ?>
            <div class="error-message"><?php echo $error_message; ?></div>
        <?php endif; ?>

        <form method="POST" action="admin_login.php">
            <input type="text" name="username" class="input-field" placeholder="Username" required>
            <input type="password" name="password" class="input-field" placeholder="Password" required>
            <button type="submit" class="login-btn">Login</button>
        </form>

        <a href="#" class="forgot-password">Forgot Password?</a>
    </div>

</body>
</html>
