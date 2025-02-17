<?php
$servername = "localhost"; // XAMPP default server
$username = "root"; // Default username
$password = ""; // No password in XAMPP
$database = "contact_form_db"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
