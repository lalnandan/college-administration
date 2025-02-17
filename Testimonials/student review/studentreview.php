<?php
include 'config.php'; // Include database connection

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $rating = intval($_POST['rating']); // Convert input to an integer
    $review = $_POST['review'];

    // Ensure rating is between 1 and 5
    if ($rating < 1 || $rating > 5) {
        die("Invalid rating. Please submit a rating between 1 and 5.");
    }

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO reviews (name, rating, review) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $name, $rating, $review);
    $stmt->execute();
    $stmt->close();

    header("Location: studentreview.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Reviews</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container { width: 90%; margin: auto; padding: 20px; }
        .header { text-align: center; background-color: #007BFF; color: white; padding: 20px 0; margin-bottom: 30px; }
        .header h1 { margin: 0; }
        .review-form { background-color: #fff; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); padding: 20px; margin-bottom: 30px; }
        .review-form input, .review-form textarea, .review-form button { width: 100%; margin-bottom: 15px; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px; }
        .review-form button { background-color: #007BFF; color: white; border: none; cursor: pointer; transition: background-color 0.3s; }
        .review-form button:hover { background-color: #0056b3; }
        .reviews { background-color: #fff; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); padding: 20px; }
        .review-item { border-bottom: 1px solid #eee; padding: 15px 0; }
        .review-item:last-child { border-bottom: none; }
        .review-item h4 { margin: 0; color: #007BFF; }
        .review-item p { margin: 5px 0; color: #555; }
        .review-item .rating { color: #ffc107; }
        .footer { text-align: center; padding: 20px 0; background-color: #333; color: white; margin-top: 30px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Student Reviews</h1>
            <p>Read what our students have to say or leave your own review!</p>
        </div>

        <div class="review-form">
            <h3>Leave a Review</h3>
            <form method="post" action="">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>

                <label for="rating">Your Rating (1-5):</label>
                <input type="number" id="rating" name="rating" min="1" max="5" placeholder="Enter your rating" required>

                <label for="review">Your Review:</label>
                <textarea id="review" name="review" rows="5" placeholder="Write your review here..." required></textarea>

                <button type="submit">Submit Review</button>
            </form>
        </div>

        <div class="reviews">
            <h3>What Our Students Say</h3>
            <?php
            $sql = "SELECT name, rating, review, submitted_at FROM reviews ORDER BY submitted_at DESC";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="review-item">';
                    echo '<h4>' . htmlspecialchars($row['name']) . '</h4>';
                    echo '<p class="rating">Rating: ' . str_repeat('★', $row['rating']) . str_repeat('☆', 5 - $row['rating']) . '</p>';
                    echo '<p>"' . htmlspecialchars($row['review']) . '"</p>';
                    echo '</div>';
                }
            } else {
                echo "<p>No reviews yet. Be the first to leave a review!</p>";
            }
            ?>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2025 [Rajiv Gandhi Nanded]. All rights reserved. Design by :- Snehalata kulkarni & Lalnandan Yetalkar</p>
    </div>
</body>
</html>
