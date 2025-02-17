<?php
$servername = "localhost"; // Change if needed
$username = "root"; // Default for XAMPP/WAMP
$password = ""; // Default is empty for XAMPP/WAMP
$dbname = "student_reviews"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
