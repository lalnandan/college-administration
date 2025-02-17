<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader (Make sure you installed PHPMailer via Composer)
require 'vendor/autoload.php';

// Create an instance of PHPMailer
$mail = new PHPMailer(true);

try {
    // SMTP Configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.example.com'; // Replace with your SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'asklalnandan@gmail.com'; // Your email
    $mail->Password = 'ofbr hhiq nadp bsbw'; // Your email password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->setFrom('your_email@gmail.com', 'Your Name');
    $mail->addAddress('recipient@example.com');
    // Email Details
    $mail->setFrom('your_email@example.com', 'Your Name');
    $mail->addAddress('recipient@example.com'); // Recipient's email
    $mail->Subject = 'Password Reset Link';
    $mail->Body    = 'Click on this link to reset your password: <a href="#">Reset Password</a>';

    $mail->send();
    echo 'Password reset email has been sent!';
} catch (Exception $e) {
    echo "Error: {$mail->ErrorInfo}";
}
?>
