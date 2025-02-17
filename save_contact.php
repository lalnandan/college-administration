<?php
$servername = "localhost"; // Change if needed
$username = "root"; // Update with your MySQL username
$password = ""; // Update with your MySQL password
$database = "Contact_Form_DB"; // The database you're using

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data and sanitize input to prevent XSS attacks
$name = htmlspecialchars(trim($_POST['name']));
$email = htmlspecialchars(trim($_POST['email']));
$subject = htmlspecialchars(trim($_POST['subject']));
$message = htmlspecialchars(trim($_POST['message']));

// Check if fields are not empty
if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    echo "All fields are required.";
    exit;
}

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format.";
    exit;
}

// Insert into database
$sql = "INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    // Check for SQL preparation errors
    echo "Error preparing statement: " . $conn->error;
    exit;
}

$stmt->bind_param("ssss", $name, $email, $subject, $message);

// Execute and handle success or error
if ($stmt->execute()) {
    // Redirect to a thank you page or back to the contact form
    header("Location: thank_you.html"); // Or redirect to another page
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
