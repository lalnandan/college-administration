<?php
include 'db_connection.php';  // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $full_name = $_POST['full-name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];
    $start_date = $_POST['preferred-start-date'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postal_code = $_POST['postal-code'];
    $referral_source = $_POST['referral-source'];
    $message = $_POST['message'];

    // Prepare SQL query to insert data into the database
    $sql = "INSERT INTO admission_forms (full_name, dob, gender, email, phone, course, start_date, address, city, state, postal_code, referral_source, message)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssssss", $full_name, $dob, $gender, $email, $phone, $course, $start_date, $address, $city, $state, $postal_code, $referral_source, $message);

    // Execute the query and provide feedback
    if ($stmt->execute()) {
        echo "<p style='color: green;'>Application Submitted Successfully!</p>";
    } else {
        echo "<p style='color: red;'>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
    $conn->close();
}
?>
