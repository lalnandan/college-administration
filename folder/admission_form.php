<?php
// Include the database connection
include 'db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* Add your styles for the form */
    </style>
</head>
<body>

<div class="container">
    <h2>Student Admission Form</h2>
    <form id="admissionForm">
        <input type="text" name="full-name" id="full-name" placeholder="Full Name" required>
        <input type="date" name="dob" id="dob" required>
        <input type="text" name="gender" id="gender" placeholder="Gender" required>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <input type="text" name="phone" id="phone" placeholder="Phone" required>
        <input type="text" name="course" id="course" placeholder="Course" required>
        <input type="date" name="preferred-start-date" id="start-date" required>
        <textarea name="address" id="address" placeholder="Address" required></textarea>
        <input type="text" name="city" id="city" placeholder="City" required>
        <input type="text" name="state" id="state" placeholder="State" required>
        <input type="text" name="postal-code" id="postal-code" placeholder="Postal Code" required>
        <input type="text" name="referral-source" id="referral-source" placeholder="Referral Source" required>
        <textarea name="message" id="message" placeholder="Message"></textarea>
        <button type="submit" id="submitForm">Submit</button>
    </form>

    <div id="result"></div>
</div>

<script>
    $(document).ready(function(){
        $('#admissionForm').submit(function(e){
            e.preventDefault();  // Prevent the form from submitting normally

            var formData = $(this).serialize();  // Get all form data

            $.ajax({
                url: 'submit_admission.php',  // The PHP script to handle the form submission
                type: 'POST',
                data: formData,
                success: function(response){
                    $('#result').html(response);  // Display the response (success message)
                    $('#admissionForm')[0].reset();  // Reset the form
                },
                error: function(){
                    $('#result').html('An error occurred while submitting the form.');
                }
            });
        });
    });
</script>

</body>
</html>
