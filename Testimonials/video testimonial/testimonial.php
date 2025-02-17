<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Testimonials</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            width: 90%;
            margin: auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            color: #333;
        }

        .section {
            margin-bottom: 40px;
        }

        .section h2 {
            color: #555;
            margin-bottom: 15px;
        }

        .testimonial {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 20px;
        }

        .testimonial-card {
            flex: 1 1 45%;
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .testimonial-card h3 {
            color: #333;
            margin: 10px 0;
        }

        .testimonial-card p {
            color: #666;
            font-size: 14px;
            line-height: 1.5;
            margin-bottom: 15px;
        }

        video {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .footer {
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
            background-color: #333;
            color: #fff;
        }

        .testimonial-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        .testimonial-form input,
        .testimonial-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .testimonial-form button {
            background-color: #333;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Student Testimonials</h1>
            <p>Watch and read what our students have to say about us!</p>
        </div>

        <!-- Testimonial Form -->
        <div class="section testimonial-form">
            <h2>Submit Your Testimonial</h2>
            <form id="testimonialForm" enctype="multipart/form-data">
                <input type="text" id="name" name="name" placeholder="Your Name" required>
                <textarea id="message" name="message" placeholder="Your Testimonial"></textarea>
                <input type="file" id="video" name="video" accept="video/*">
                <button type="submit">Submit</button>
            </form>
        </div>

        <!-- Video Testimonials Section -->
        <div class="section">
            <h2>Video Testimonials</h2>
            <div class="testimonial" id="videoTestimonials"></div>
        </div>

        <!-- Text-Based Testimonials Section -->
        <div class="section">
            <h2>Written Testimonials</h2>
            <div class="testimonial" id="textTestimonials"></div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>&copy; 2025 [Rajiv Gandhi Nanded]. All rights reserved. Design by :- Snehalata kulkarni & Lalnandan Yetalkar</p>
        </div>
    </div>

    <script>
document.addEventListener("DOMContentLoaded", loadTestimonials);

document.getElementById("testimonialForm").addEventListener("submit", function (event) {
    event.preventDefault();
    let formData = new FormData(this);

    fetch("savetestimonial.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        loadTestimonials();
    })
    .catch(error => console.error("Error:", error));
});

function loadTestimonials() {
    fetch("get_testimonial.php")
    .then(response => response.json())
    .then(testimonials => {
        let videoContainer = document.getElementById("videoTestimonials");
        let textContainer = document.getElementById("textTestimonials");
        videoContainer.innerHTML = "";
        textContainer.innerHTML = "";

        testimonials.forEach(testimonial => {
            if (testimonial.video) {
                videoContainer.innerHTML += `<div class='testimonial-card'>
                                                <video controls>
                                                    <source src="${testimonial.video}" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                                <h3>${testimonial.name}</h3>
                                                <p>${testimonial.message}</p>
                                            </div>`;
            } else {
                textContainer.innerHTML += `<div class='testimonial-card'>
                                                <h3>${testimonial.name}</h3>
                                                <p>${testimonial.message}</p>
                                            </div>`;
            }
        });
    })
    .catch(error => console.error("Error:", error));
}
</script>

</body>
</html>
