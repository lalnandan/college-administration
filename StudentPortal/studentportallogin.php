<?php
session_start();

// Database connection
$host = 'localhost';
$dbname = 'admission'; // Replace with your actual database name
$username = 'root'; // Replace with your database username
$password = ''; // Replace with your database password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_POST['username'];
    $input_password = $_POST['password'];

    // Debugging: Print submitted credentials
    echo "Submitted Student ID: $student_id<br>";
    echo "Submitted Password: $input_password<br>";

    // Fetch student data from the database
    $stmt = $pdo->prepare("SELECT * FROM admissions WHERE student_id = :student_id");
    $stmt->execute(['student_id' => $student_id]);
    $student = $stmt->fetch(PDO::FETCH_ASSOC);

    // Debugging: Print fetched student data
    echo "Fetched Student Data: ";
    print_r($student);

    if ($student && password_verify($input_password, $student['password'])) {
        echo "Password verified! Redirecting to student_dashboard.php...";
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $student['student_id'];
        header("Location: student_dashboard.php");
        exit();
    } else {
        echo "Invalid credentials!";
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(to right, #00c6ff, #0072ff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .login-box {
            background-color: white;
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            transition: all 0.3s ease;
        }

        .login-box:hover {
            transform: scale(1.05);
        }

        h2 {
            text-align: center;
            font-size: 28px;
            color: #0072ff;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            font-size: 14px;
            color: #333;
        }

        .input-group input {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .input-group input:focus {
            border-color: #0072ff;
        }

        .button-group {
            margin-top: 20px;
        }

        button {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            color: white;
            background-color: #0072ff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }

        .footer a {
            font-size: 14px;
            color: #0072ff;
            text-decoration: none;
            margin: 0 10px;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        /* Adjust the position of "Create an account" */
        .footer .create-account {
            display: inline-block;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <div class="login-box">
            <h2>Student Login</h2>
            <form action="studentportallogin.php" method="POST">
                <div class="input-group">
                    <label for="username">Student ID</label>
                    <input type="text" id="username" name="username" placeholder="Enter your Student ID" required>
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>

                <div class="button-group">
                    <button type="submit">Login</button>
                </div>

                <?php if (isset($error)) { ?>
                    <p style="color: red; text-align: center;"><?php echo $error; ?></p>
                <?php } ?>

                <div class="footer">
                    <a href="forgetpassword.php">Forgot password?</a>
                    <div class="create-account">
                        <a href="admissionform.php">Create an account</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>