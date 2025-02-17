<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        header h1 {
            color: #007BFF;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-size: 16px;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .form-group input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
        }

        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #555;
        }

    </style>
</head>
<body>

<div class="container">
    <!-- Header Section -->
    <header>
        <h1>Event Registration Form</h1>
        <p>Please fill out the form below to register for the event.</p>
    </header>

    <!-- Event Registration Form -->
    <form action="submit_registration.php" method="POST">
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

        <!-- Phone Number Field -->
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
        </div>

        <!-- Event Selection Field -->
        <div class="form-group">
            <label for="event">Select Event:</label>
            <select id="event" name="event" required>
                <option value="conference">Annual Technology Conference</option>
                <option value="workshop">AI Workshop</option>
                <option value="seminar">Digital Marketing Seminar</option>
                <option value="sports">Annual Sports Day</option>
            </select>
        </div>

        <!-- Additional Comments -->
        <div class="form-group">
            <label for="comments">Additional Comments (Optional):</label>
            <textarea id="comments" name="comments" rows="4"></textarea>
        </div>

        <!-- Submit Button -->
        <div class="form-group">
            <input type="submit" value="Register">
        </div>
    </form>
</div>

<!-- Footer Section -->
<footer>
    <p>&copy; 2025 [Rajiv Gandhi Nanded]. All rights reserved. Design by :- Snehalata kulkarni & Lalnandan Yetalkar</p>
</footer>

</body>
</html>
