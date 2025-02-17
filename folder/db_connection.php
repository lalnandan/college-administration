<?php
// Replace with your actual database credentials
$host = 'localhost';  // or your server's IP address
$dbname = 'admissions';
$username = 'root';  // or your actual MySQL username
$password = '';  // or your actual MySQL password

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
