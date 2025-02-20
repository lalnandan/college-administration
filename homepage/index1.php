<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Institute Website</title>
    <style>
        /* Basic Styling for Navigation */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        nav {
            background-color: #333;
            padding: 10px 0;
        }
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        nav ul li {
            position: relative;
            margin: 0 15px;
        }
        nav ul li a {
            text-decoration: none;
            color: white;
            padding: 10px 15px;
            display: block;
        }
        nav ul li a:hover {
            background-color: #1511e0;
            color: #ff6600;
        }
        /* Dropdown Menu */
        .dropdown {
            display: none;
            position: absolute;
            background-color: #25991a;
            top: 100%;
            left: 0;
            min-width: 200px;
            z-index: 1000;
        }
        .dropdown li {
            margin: 0;
        }
        .dropdown li a {
            padding: 10px 15px;
            display: block;
            white-space: nowrap;
        }
        .dropdown li a:hover {
            background-color: #555;
        }
        /* Show Dropdown on Hover */
        nav ul li:hover .dropdown {
            display: block;
        }
        /* Main Content */
        main {
            padding: 20px;
        }
        section {
            margin-bottom: 40px;
        }

    </style>
    <style>
        body {
          background-image: url('college profile.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
        }
    </style>
</head>
<body>

<!-- Navigation with Dropdown -->
<nav>
    <ul>
        <li>
            <a href="homepage.php">Homepage</a>
        </li>
        <li>
            <a href="/college/aboutus/aboutus.php">About Us</a>
        </li>
        <li>
            <a href="/college/courseoffered/courses.php">Courses Offered</a>
        </li>
        <li>
            <a href="/college/faculty/multiplefaculty.php">Faculty</a>
        </li>
        <li>
            <a href="#testimonials">Testimonials</a>
            <ul class="dropdown">
                <li><a href="/college/testimonials/video testimonial/testimonial.php">Video Testimonials</a>
                <li><a href="/college/testimonials/student review/studentreview.php">Student Reviews</a></li>
            </ul>
        </li>
        <li>
            <a href="#study-material">Study Material</a>
            <ul class="dropdown">
                <li><a href="/college/studymaterial/studymaterial.php">E-Learning Platform</a></li>
                <li><a href="/college/studymaterial/studymaterial1.php">Study Materials</a></li>
                <li><a href="/college/studymaterial/mocktest.php">Mock Tests</a></li>
                <li><a href="/college/studymaterial/assingnment and solutions.php">Assignments and Solutions</a></li>
                <li><a href="/college/studymaterial/intractive_tools.php">Interactive Tools</a></li>
            </ul>
        </li>
        <li>
            <a href="#resources">Resources</a>
            <ul class="dropdown">
                <li><a href="/college/resources/educational.php">Educational Articles</a></li>
                <li><a href="/college/resources/prepration guide.php">Preparation Guides</a></li>
                <li><a href="/college/resources/exam updates.php">Exam Updates</a></li>
                <li><a href="/college/resources/motivational content.php">Motivational Content</a></li>
            </ul>
        </li>
        <li>
            <a href="#admissions">Admissions</a>
            <ul class="dropdown">
                <li><a href="/college/admissions/how to apply.php">How to Apply</a></li>
                <li><a href="/college/admissions/admission requirements.php">Admission Requirements</a></li>
                <li><a href="/college/admissions/admissionform.php">Application Form</a></li>
                <li><a href="/college/admissions/documents.requirnts.php">Documents Required</a></li>
                <li><a href="/college/admissions/scholarship and finance.php">Scholarships & Financial Aid</a></li>
            </ul>
        </li>
        <li>
            <a href="#contact">Contact Us</a>
            <ul class="dropdown">
                <li><a href="/college/contactus/contactus.php">Contact Form</a></li>
            </ul>
        </li>
        <li>
            <a href="#faq">FAQs</a>
            <ul class="dropdown">
                <li><a href="/college/faqs/faq.php">General Queries</a></li>
            </ul>
        </li>
        <li>
            <a href="#events">Events</a>
            <ul class="dropdown">
                <li><a href="/college/events/upcoming events.php">Upcoming Events</a></li>
                <li><a href="/college/events/event registration.php">Event Registration</a></li>
                <li><a href="/college/events/past events.php">Past Events</a></li>
            </ul>
        </li>
        <li>
            <a href="#gallery">Gallery</a>
            <ul class="dropdown">
                <li><a href="/college/Gallery/gallery.php">Campus Photos</a></li>
            </ul>
        </li>
        <li>
            <a href="#social-media">Social Media</a>
            <ul class="dropdown">
                <li><a href="/college/social media/socialmedia.php">Social Media Links</a></li>
            </ul>
        </li>
        <li>
            <a href="/college/studentportal/studentportallogin.php">Student Portal</a>
        <li>
            <a href="/college/privacypolicy/privacy.php">Privacy Policy</a>
            
        </li>
    </ul>
</nav>

<!-- Main Content Placeholder -->



</body>
</html>