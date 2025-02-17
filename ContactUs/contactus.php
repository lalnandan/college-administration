<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 50%;
            margin: auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            border-radius: 5px;
        }

        header {
            text-align: center;
            background-color: #007BFF;
            color: white;
            padding: 20px 0;
            border-radius: 5px 5px 0 0;
        }

        header h1 {
            margin: 0;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 14px;
            margin-bottom: 8px;
            display: block;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 150px;
        }

        button {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #218838;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #333;
            color: white;
        }

        /* Success Message */
        .success-message {
            display: none;
            background-color: #28a745;
            color: white;
            padding: 20px;
            text-align: center;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .success-message h2 {
            margin: 0;
        }

        .success-message p {
            font-size: 18px;
            margin: 10px 0 0;
        }

        .success-message .thank-you {
            font-weight: bold;
            font-size: 20px;
        }

        /* Button for going back to index page */
        .success-message button {
            background-color: #007BFF;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">

    <!-- Header Section -->
    <header>
        <h1>Contact Us</h1>
        <p>Have any questions or inquiries? Feel free to reach out to us!</p>
    </header>

    <!-- Contact Form Section -->
    <form id="contactForm" action="contactussubmitformdb.php" method="POST">
        <!-- Name Field -->
        <div class="form-group">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <!-- Email Field -->
        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <!-- Subject Field -->
        <div class="form-group">
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>
        </div>

        <!-- Message Field -->
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit">Send Message</button>
    </form>

    <!-- Success Message Section -->
    <div class="success-message" id="successMessage">
        <h2>Thank You for Contacting Us!</h2>
        <p class="thank-you">We will get back to you soon. Stay tuned for an amazing response.</p>
        <!-- Button to go back to the index page -->
        <button onclick="goToIndex()">Go Back to Homepage</button>
    </div>

</div>

<!-- Footer Section -->
<footer>
    <p>&copy; 2025 [Rajiv Gandhi Nanded]. All rights reserved. Design by :- Snehalata kulkarni & Lalnandan Yetalkar</p>
</footer>

<script>
    // Function to show success message after form submission
    function showSuccessMessage(event) {
        event.preventDefault(); // Prevent form from submitting normally

        // Hide the form
        document.getElementById('contactForm').style.display = 'none';

        // Show the success message
        document.getElementById('successMessage').style.display = 'block';
    }

    // Function to redirect the user to INDEX1.PHP
    function goToIndex() {
        window.location.href = '/college/homepage/INDEX1.PHP';  // Redirect to INDEX1.PHP
    }
</script>

</body>
</html>
