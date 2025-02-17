<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = ""; // Leave this blank if no password is set for 'root'
$dbname = "student_dashboard";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection and display error message
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());  // Shows the specific error message
} else {
    echo "Connected successfully to the database!";
}
?>
