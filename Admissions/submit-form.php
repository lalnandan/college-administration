<?php
// Database connection (Change with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admission";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Capture form data with error handling
$student_id = $_POST['student-id'] ?? '';
$full_name = $_POST['full-name'] ?? '';
$dob = $_POST['dob'] ?? '';
$gender = $_POST['gender'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$password = $_POST['password'] ?? '';
$course = $_POST['course'] ?? '';
$preferred_start_date = $_POST['preferred-start-date'] ?? '';
$address = $_POST['address'] ?? '';
$city = $_POST['city'] ?? '';
$state = $_POST['state'] ?? '';
$postal_code = $_POST['postal-code'] ?? '';
$referral_source = $_POST['referral-source'] ?? '';
$message = $_POST['message'] ?? '';

// Hash the password for security
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Handle profile photo upload
$target_dir = "uploads/";
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);
}

$file_name = basename($_FILES["profile-photo"]["name"]);
$target_file = $target_dir . time() . "_" . $file_name;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if file is an actual image
$check = getimagesize($_FILES["profile-photo"]["tmp_name"]);
if ($check === false) {
    die("File is not an image.");
}

// Allow only specific image formats
$allowed_types = ["jpg", "jpeg", "png", "gif"];
if (!in_array($imageFileType, $allowed_types)) {
    die("Only JPG, JPEG, PNG, and GIF files are allowed.");
}

// Move uploaded file
if (move_uploaded_file($_FILES["profile-photo"]["tmp_name"], $target_file)) {
    // Use prepared statement for security
    $sql = "INSERT INTO admissions 
            (student_id, full_name, dob, gender, email, phone, password, course, preferred_start_date, address, city, state, postal_code, referral_source, message, profile_photo) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssssssss", $student_id, $full_name, $dob, $gender, $email, $phone, $hashed_password, $course, $preferred_start_date, $address, $city, $state, $postal_code, $referral_source, $message, $target_file);

    if ($stmt->execute()) {
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Form Submitted</title>
            <style>
                body {
                    font-family: 'Arial', sans-serif;
                    background: linear-gradient(135deg, #3498db, #8e44ad);
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    margin: 0;
                }
                .container {
                    background: #fff;
                    padding: 40px;
                    border-radius: 10px;
                    text-align: center;
                    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
                    width: 450px;
                }
                h1 {
                    font-size: 2.5em;
                    color: #2c3e50;
                    margin-bottom: 20px;
                    font-family: 'Roboto', sans-serif;
                }
                .message {
                    font-size: 1.2em;
                    color: #7f8c8d;
                    margin-bottom: 30px;
                }
                .checkmark {
                    width: 80px;
                    height: 80px;
                    margin: 0 auto 20px;
                    border: 5px solid #2ecc71;
                    border-radius: 50%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    background-color: #2ecc71;
                    color: white;
                    font-size: 36px;
                    font-weight: bold;
                }
                button {
                    background-color: #2ecc71;
                    color: white;
                    border: none;
                    padding: 15px 30px;
                    font-size: 1.2em;
                    border-radius: 5px;
                    cursor: pointer;
                    transition: all 0.3s ease;
                    width: 100%;
                }
                button:hover {
                    background-color: #27ae60;
                    transform: translateY(-5px);
                }
                @media (max-width: 600px) {
                    .container {
                        width: 90%;
                    }
                }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='checkmark'>✓</div>
                <h1>Form Submitted Successfully!</h1>
                <p class='message'>Your application has been successfully submitted. We will review your details and get back to you shortly.</p>
                <button onclick=\"window.location.href='/college/homepage/index1.php'\">Go to Home Page</button>
            </div>
        </body>
        </html>
        ";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "File upload failed.";
}

$conn->close();
?>
