<?php
session_start();

// Database Connection
$host = 'localhost';
$dbname = 'admission';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Check if token is provided
if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Check if token is valid and not expired
    $stmt = $pdo->prepare("SELECT * FROM admissions WHERE reset_token = :token AND reset_token_expires > NOW()");
    $stmt->execute(['token' => $token]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        die("Invalid or expired token.");
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $new_password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        // Update the password and remove the token
        $stmt = $pdo->prepare("UPDATE admissions SET password = :password, reset_token = NULL, reset_token_expires = NULL WHERE reset_token = :token");
        $stmt->execute(['password' => $new_password, 'token' => $token]);

        echo "Password reset successful. You can now <a href='studentportallogin.php'>login</a>.";
        exit();
    }
} else {
    die("No token provided.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>
    <h2>Reset Password</h2>
    <form action="" method="POST">
        <label for="password">New Password</label>
        <input type="password" name="password" required>
        <button type="submit">Reset Password</button>
    </form>
</body>
</html>
