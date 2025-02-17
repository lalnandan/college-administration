<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$host = 'localhost';
$db = 'admission';
$user = 'root';
$pass = ''; // No password
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die(json_encode(['success' => false, 'message' => 'Database connection failed: ' . $conn->connect_error]));
}

// Get token and new password from the request
$data = json_decode(file_get_contents('php://input'), true);
if (!$data || !isset($data['token']) || !isset($data['newPassword'])) {
    die(json_encode(['success' => false, 'message' => 'Invalid input']));
}

$token = $data['token'];
$newPassword = password_hash($data['newPassword'], PASSWORD_BCRYPT);

// Check if token is valid and not expired
$stmt = $conn->prepare("SELECT id FROM admissions WHERE reset_token = ? AND reset_token_expiry > NOW()");
if (!$stmt) {
    die(json_encode(['success' => false, 'message' => 'Prepare failed: ' . $conn->error]));
}
$stmt->bind_param('s', $token);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    // Update password and clear reset token
    $stmt = $conn->prepare("UPDATE admissions SET password = ?, reset_token = NULL, reset_token_expiry = NULL WHERE reset_token = ?");
    if (!$stmt) {
        die(json_encode(['success' => false, 'message' => 'Prepare failed: ' . $conn->error]));
    }
    $stmt->bind_param('ss', $newPassword, $token);
    $stmt->execute();

    echo json_encode(['success' => true, 'message' => 'Password updated successfully.']);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid or expired token.']);
}

$conn->close();
?>