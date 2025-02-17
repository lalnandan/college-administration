<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_reviews";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, message, video_path FROM testimonials ORDER BY created_at DESC";
$result = $conn->query($sql);

$testimonials = [];
while ($row = $result->fetch_assoc()) {
    $row['video'] = $row['video_path'] ? $row['video_path'] : null;
    $testimonials[] = $row;
}

echo json_encode($testimonials);

$conn->close();
?>
