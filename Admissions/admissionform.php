<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <link rel="stylesheet" href="styles.css">
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #000000;
        padding: 0px;
    }
    .form-container {
        max-width: 1000px;
        margin: 0 auto;
        background-color: #8a4545;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 8px 16px rgb(255, 255, 255);
    }
    h2 {
        text-align: center;
        color: #fffcfc;
    }
    label {
        font-size: 16px;
        margin-bottom: 5px;
        display: block;
    }
    input, select, textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #fbff00;
        border-radius: 20px;
        background-color: #ffffff; /* White background */
    }
    input[type="file"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #fbff00;
        border-radius: 20px;
        background-color: #ffffff; /* White background */
        color: #000000; /* Black text */
        cursor: pointer;
    }

        input[type="file"]::file-selector-button {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 8px 12px;
        border-radius: 5px;
        cursor: pointer;
    }
    input[type="file"]::file-selector-button:hover {
        background-color: #45a049;
    }
    button {
        background-color: #4CAF50;
        color: rgb(255, 255, 255);
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
        font-size: 16px;
    }
    button:hover {
        background-color: #45a049;
    }
    .form-section {
        margin-bottom: 20px;
    }
    .form-section h3 {
        margin-top: 0;
        font-size: 18px;
        color: #ffffff;
    }
</style>

</head>
<body>

    <div class="form-container">
        <h2>Admission Form</h2>
        <form action="submit-form.php" method="POST" enctype="multipart/form-data">
            
            <!-- Student ID (Auto-generated) -->
            <div class="form-section">
                <h3>Student ID</h3>
                <label for="student-id">Your Student ID:</label>
                <input type="text" id="student-id" name="student-id" readonly>
            </div>

            <!-- Personal Information -->
            <div class="form-section">
                <h3>Personal Information</h3>
                <label for="full-name">Full Name:</label>
                <input type="text" id="full-name" name="full-name" required>

                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>

                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>

                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <!-- Profile Photo Upload -->
            <div class="form-section">
                <h3>Profile Photo</h3>
                <label for="profile-photo">Upload Profile Photo:</label>
                <input type="file" id="profile-photo" name="profile-photo" accept="image/*" required>
            </div>

            <!-- Course Information -->
            <div class="form-section">
                <h3>Course Information</h3>
                <label for="course">Select Course:</label>
                <select id="course" name="course" required>
                    <option value="">Select Course</option>
                    <option value="BCA">Bachelor of Computer Application</option>
                    <option value="Bcs">Bachelor of Computer Science</option>
                    <option value="msc (cs)">Master of Science in Computer Science</option>
                </select>

                <label for="preferred-start-date">Preferred Start Date:</label>
                <input type="date" id="preferred-start-date" name="preferred-start-date" required>
            </div>

            <!-- Address Information -->
            <div class="form-section">
                <h3>Address</h3>
                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="4" required></textarea>

                <label for="city">City:</label>
                <input type="text" id="city" name="city" required>

                <label for="state">State:</label>
                <input type="text" id="state" name="state" required>

                <label for="postal-code">Postal Code:</label>
                <input type="text" id="postal-code" name="postal-code" required>
            </div>

            <!-- Additional Information -->
            <div class="form-section">
                <h3>Additional Information</h3>
                <label for="referral-source">How did you hear about us?</label>
                <select id="referral-source" name="referral-source" required>
                    <option value="">Select</option>
                    <option value="Online Advertisement">Online Advertisement</option>
                    <option value="Friend/Family">Friend/Family</option>
                    <option value="Social Media">Social Media</option>
                    <option value="Other">Other</option>
                </select>

                <label for="message">Additional Message (Optional):</label>
                <textarea id="message" name="message" rows="4"></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit">Submit Application</button>
        </form>
    </div>

    <script>
        // Generate a unique Student ID dynamically
        function generateStudentID() {
            let timestamp = Date.now();
            let studentID = "STU" + timestamp;
            document.getElementById("student-id").value = studentID;
        }

        window.onload = generateStudentID;
    </script>

</body>
</html>
