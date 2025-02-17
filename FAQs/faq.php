<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Frequently Asked Questions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }

        header {
            text-align: center;
            background-color: #007BFF;
            color: white;
            padding: 20px 0;
        }

        header h1 {
            margin: 0;
        }

        section {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        section h2 {
            color: #007BFF;
        }

        .faq {
            margin-bottom: 15px;
        }

        .faq h3 {
            font-size: 18px;
            margin: 0;
            cursor: pointer;
            padding: 10px;
            background-color: #f1f1f1;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .faq p {
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-top: none;
            border-radius: 5px;
            display: none;
        }

        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #333;
            color: white;
            margin-top: 20px;
        }
    </style>
    <script>
        function toggleAnswer(id) {
            var answer = document.getElementById(id);
            if (answer.style.display === "none" || answer.style.display === "") {
                answer.style.display = "block";
            } else {
                answer.style.display = "none";
            }
        }
    </script>
</head>
<body>

<div class="container">

    <!-- Header Section -->
    <header>
        <h1>Frequently Asked Questions (FAQ)</h1>
        <p>Your questions answered. Browse through our FAQs for detailed information.</p>
    </header>

    <!-- General Queries FAQ Section -->
    <section>
        <h2>General Queries</h2>
        <div class="faq">
            <h3 onclick="toggleAnswer('general1')">What are your working hours?</h3>
            <p id="general1">Our office is open from 9:00 AM to 6:00 PM, Monday to Friday.</p>
        </div>
        <div class="faq">
            <h3 onclick="toggleAnswer('general2')">How can I contact customer support?</h3>
            <p id="general2">You can contact us via email at support@example.com or call us at +123-456-7890.</p>
        </div>
    </section>

    <!-- Admission Queries FAQ Section -->
    <section>
        <h2>Admission Queries</h2>
        <div class="faq">
            <h3 onclick="toggleAnswer('admission1')">What is the admission process?</h3>
            <p id="admission1">To apply, you need to fill out the application form, submit required documents, and attend an interview if necessary.</p>
        </div>
        <div class="faq">
            <h3 onclick="toggleAnswer('admission2')">Is there an entrance exam for admission?</h3>
            <p id="admission2">No, our institution does not conduct an entrance exam. Admissions are based on academic qualifications.</p>
        </div>
    </section>

    <!-- Course Content FAQ Section -->
    <section>
        <h2>Course Content</h2>
        <div class="faq">
            <h3 onclick="toggleAnswer('course1')">What courses are available?</h3>
            <p id="course1">We offer a variety of courses in fields such as Computer Science, Business Administration, and more.</p>
        </div>
        <div class="faq">
            <h3 onclick="toggleAnswer('course2')">Are course materials available online?</h3>
            <p id="course2">Yes, all course materials are available online through our e-learning platform.</p>
        </div>
    </section>

    <!-- Payment and Fees FAQ Section -->
    <section>
        <h2>Payment and Fees</h2>
        <div class="faq">
            <h3 onclick="toggleAnswer('fees1')">What is the fee structure?</h3>
            <p id="fees1">The fee structure varies depending on the course you choose. Please refer to our fee schedule for more details.</p>
        </div>
        <div class="faq">
            <h3 onclick="toggleAnswer('fees2')">Can I pay the fees in installments?</h3>
            <p id="fees2">Yes, we offer installment plans for the payment of fees. Please contact our finance department for more information.</p>
        </div>
    </section>

    <!-- Technical Queries FAQ Section -->
    <section>
        <h2>Technical Queries</h2>
        <div class="faq">
            <h3 onclick="toggleAnswer('technical1')">How do I access the e-learning platform?</h3>
            <p id="technical1">You can log in to our e-learning platform using your student ID and password on our website.</p>
        </div>
        <div class="faq">
            <h3 onclick="toggleAnswer('technical2')">What should I do if I face technical issues during an online class?</h3>
            <p id="technical2">If you encounter technical difficulties, please contact our technical support team at techsupport@example.com.</p>
        </div>
    </section>

</div>

<!-- Footer Section -->
<footer>
    <p>&copy; 2025 [Rajiv Gandhi Nanded]. All rights reserved. Design by :- Snehalata kulkarni & Lalnandan Yetalkar</p>
</footer>

</body>
</html>
