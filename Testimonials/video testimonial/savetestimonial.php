<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_reviews";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST["name"];
$message = $_POST["message"];
$videoPath = null;

if (isset($_FILES["video"]) && $_FILES["video"]["error"] == 0) {
    $targetDir = "uploads/";
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }
    $videoName = time() . "_" . basename($_FILES["video"]["name"]); // Unique filename
    $videoPath = $targetDir . $videoName;
    move_uploaded_file($_FILES["video"]["tmp_name"], $videoPath);
}

$sql = "INSERT INTO testimonials (name, message, video_path) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $message, $videoPath);

if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Testimonial saved successfully"]);
} else {
    echo json_encode(["success" => false, "error" => $stmt->error]);
}

$stmt->close();
$conn->close();
?>
