<?php
$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password (empty)
$dbname = "event_registration_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$event = $_POST['event'];
$comments = $_POST['comments'];

// Insert data into database
$sql = "INSERT INTO registrations (full_name, email, phone, event_selected, comments) 
        VALUES ('$name', '$email', '$phone', '$event', '$comments')";

if ($conn->query($sql) === TRUE) {
    // Redirect to success page
    header("Location: /college/events/sucess.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
