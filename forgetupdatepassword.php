<?php
header('Content-Type: application/json');

// Simulate database connection
$host = 'localhost';
$db = 'admission';
$user = 'root';
$pass = '';
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die(json_encode(['success' => false, 'message' => 'Database connection failed']));
}

// Get token and new password from the request
$data = json_decode(file_get_contents('php://input'), true);
$token = $data['token'];
$newPassword = password_hash($data['newPassword'], PASSWORD_BCRYPT);

// Check if token is valid and not expired
$stmt = $conn->prepare("SELECT id FROM users WHERE reset_token = ? AND reset_token_expiry > NOW()");
$stmt->bind_param('s', $token);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    // Update password and clear reset token
    $stmt = $conn->prepare("UPDATE users SET password = ?, reset_token = NULL, reset_token_expiry = NULL WHERE reset_token = ?");
    $stmt->bind_param('ss', $newPassword, $token);
    $stmt->execute();

    echo json_encode(['success' => true, 'message' => 'Password updated successfully.']);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid or expired token.']);
}

$conn->close();
?>