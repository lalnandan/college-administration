<?php
session_start();

// ✅ Database Connection
$host = "localhost";
$username = "root";
$password = "";
$database = "admission";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ✅ Check if student_id is provided in the URL
if (!isset($_GET['student_id']) || empty($_GET['student_id'])) {
    die("<script>alert('No Student ID provided!'); window.location.href='profile.php';</script>");
}

$student_id = $_GET['student_id'];

// ✅ Fetch Student Data
$sql = "SELECT * FROM admissions WHERE student_id = ?";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("SQL Error: " . $conn->error);
}
$stmt->bind_param("s", $student_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $student = $result->fetch_assoc();
} else {
    die("<script>alert('Student not found!'); window.location.href='profile.php';</script>");
}
$stmt->close();

// ✅ Handle Profile Update
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $course = $_POST['course'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postal_code = $_POST['postal_code'];
    $message = $_POST['message'];

    $update_photo = false;
    $profile_photo = $student['profile_photo']; // Keep existing photo by default
    
    // ✅ Handle File Upload
    if (!empty($_FILES['profile_photo']['name'])) {
        $targetDir = "G:/fgbjnhgjgh/htdocs/college/Admissions/uploads/"; // Ensure this folder exists
        
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true); // Create directory if not exists
        }

        $fileName = basename($_FILES['profile_photo']['name']);
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $newFileName = "profile_" . time() . "." . $fileType;
        $targetFilePath = $targetDir . $newFileName;

        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
        
        if (in_array($fileType, $allowedTypes)) {
            if (move_uploaded_file($_FILES['profile_photo']['tmp_name'], $targetFilePath)) {
                $profile_photo = "uploads/" . $newFileName; // Save relative path in DB
                $update_photo = true;
            } else {
                echo "<script>alert('Error uploading photo!');</script>";
            }
        } else {
            echo "<script>alert('Invalid file type! Only JPG, JPEG, PNG, and GIF allowed.');</script>";
        }
    }

    // ✅ Update Query
    if ($update_photo) {
        $sql = "UPDATE admissions SET full_name=?, email=?, phone=?, address=?, course=?, dob=?, gender=?, city=?, state=?, postal_code=?, message=?, profile_photo=? WHERE student_id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssssssss", $full_name, $email, $phone, $address, $course, $dob, $gender, $city, $state, $postal_code, $message, $profile_photo, $student_id);
    } else {
        $sql = "UPDATE admissions SET full_name=?, email=?, phone=?, address=?, course=?, dob=?, gender=?, city=?, state=?, postal_code=?, message=? WHERE student_id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssssssss", $full_name, $email, $phone, $address, $course, $dob, $gender, $city, $state, $postal_code, $message, $student_id);
    }

    if ($stmt->execute()) {
        echo "<script>alert('Profile updated successfully!'); window.location.href='edit_profile.php?student_id=$student_id';</script>";
    } else {
        echo "<script>alert('Error updating profile!');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #1E1E2E, #3A3A52);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            width: 50%;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            animation: fadeIn 1s ease-in-out;
        }
        h2 {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .tab-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
        }
        .tab-btn {
            background: #ff8c00;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }
        .tab-btn:hover, .tab-btn.active {
            background: #ff6500;
        }
        .tab-content {
            display: none;
        }
        .tab-content.active {
            display: block;
        }
        form label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        form input {
            width: 100%;
            padding: 8px;
            border: none;
            border-radius: 8px;
            margin-bottom: 10px;
            background: rgba(255, 255, 255, 0.2);
            color: white;
        }
        form button {
            width: 100%;
            padding: 10px;
            background: #ff8c00;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }
        form button:hover {
            background: #ff6500;
        }
        .upload-btn {
            background: #4CAF50;
            color: white;
            margin-top: 10px;
        }
        .upload-btn:hover {
            background: #45a049;
        }
        form button[name="upload_photo"] {
            background: #007bff; /* Change to blue */
            color: white;
            border: none;
            padding: 10px;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        form button[name="upload_photo"]:hover {
            background: #0056b3; /* Darker blue */
        }
        .profile-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px; /* Space between details and photo */
}

.profile-details {
    flex: 1;
}

.profile-photo img {
    width: 150px;
    height: 150px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(255, 255, 255, 0.2);
}

    </style>
</head>
<body>
    <div class="container">
        <h2 id="aiTitle"></h2>
        <div class="tab-container">
            <button class="tab-btn active" onclick="openTab(event, 'edit')">Edit Profile</button>
            <button class="tab-btn" onclick="openTab(event, 'view')">View Profile</button>
        </div>

        <!-- Edit Profile Tab -->
        <div id="edit" class="tab-content active">
            <form method="post">
                <input type="hidden" name="student_id" value="<?= htmlspecialchars($student['student_id']); ?>">

                <label>Full Name:</label>
                <input type="text" name="full_name" value="<?= htmlspecialchars($student['full_name']); ?>" required>

                <label>Email:</label>
                <input type="email" name="email" value="<?= htmlspecialchars($student['email']); ?>" required>

                <label>Phone:</label>
                <input type="text" name="phone" value="<?= htmlspecialchars($student['phone']); ?>" required>

                <label>Address:</label>
                <input type="text" name="address" value="<?= htmlspecialchars($student['address']); ?>" required>

                <label>Course:</label>
                <input type="text" name="course" value="<?= htmlspecialchars($student['course']); ?>" required>

                <label>Dob:</label>
                <input type="text" name="dob" value="<?= htmlspecialchars($student['dob']); ?>" required>

                <label>Gender:</label>
                <input type="text" name="gender" value="<?= htmlspecialchars($student['gender']); ?>" required>

                <label>City:</label>
                <input type="text" name="city" value="<?= htmlspecialchars($student['city']); ?>" required>

                <label>State:</label>
                <input type="text" name="state" value="<?= htmlspecialchars($student['state']); ?>" required>

                <label>Postal Code:</label>
                <input type="text" name="postal_code" value="<?= htmlspecialchars($student['postal_code']); ?>" required>

                <label>Message:</label>
                <input type="text" name="message" value="<?= htmlspecialchars($student['message']); ?>" required>

                <label>Profile Photo:</label>
                <input type="file" name="profile_photo" accept="image/*">
                <button type="submit" name="upload_photo" class="upload-btn">Upload</button>

                <button type="submit">Save Changes</button>
            </form>
        </div>

       <!-- View Profile Tab -->
        <div id="view" class="tab-content">
            <div class="profile-container">
                <div class="profile-details">
                    <p><strong>Full Name:</strong> <?= htmlspecialchars($student['full_name']); ?></p>
                    <p><strong>Email:</strong> <?= htmlspecialchars($student['email']); ?></p>
                    <p><strong>Phone:</strong> <?= htmlspecialchars($student['phone']); ?></p>
                    <p><strong>Address:</strong> <?= htmlspecialchars($student['address']); ?></p>
                    <p><strong>Course:</strong> <?= htmlspecialchars($student['course']); ?></p>
                    <p><strong>DOB:</strong> <?= htmlspecialchars($student['dob']); ?></p>
                    <p><strong>Gender:</strong> <?= htmlspecialchars($student['gender']); ?></p>
                    <p><strong>City:</strong> <?= htmlspecialchars($student['city']); ?></p>
                    <p><strong>State:</strong> <?= htmlspecialchars($student['state']); ?></p>
                    <p><strong>Postal Code:</strong> <?= htmlspecialchars($student['postal_code']); ?></p>
                    <p><strong>Message:</strong> <?= htmlspecialchars($student['message']); ?></p>
                </div>

                <!-- Display Profile Photo -->
                <div class="profile-photo">
                    <?php if (!empty($student['profile_photo'])): ?>
                        <img src="<?= 'http://localhost/college/admissions/' . ltrim(htmlspecialchars($student['profile_photo']), '/'); ?>" 
                            alt="Profile Photo">
                    <?php else: ?>
                        <p>No photo uploaded</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    <script>
        function openTab(evt, tabName) {
            document.querySelectorAll(".tab-content").forEach(tab => tab.style.display = "none");
            document.querySelectorAll(".tab-btn").forEach(btn => btn.classList.remove("active"));
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.classList.add("active");
        }
    </script>
</body>
</html>
