<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Support Dashboard</title>
    <style>
        /* Basic Styles for Layout */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fa;
        }

        .container {
            width: 80%;
            margin: auto;
            padding-top: 50px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        /* Search Bar */
        .search-container {
            margin-bottom: 20px;
            text-align: center;
        }

        .search-container input {
            padding: 10px;
            width: 60%;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .search-container button {
            padding: 10px 15px;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .search-container button:hover {
            background-color: #0056b3;
        }

        /* Help Center Overview */
        .help-section {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        .help-category {
            background-color: #fff;
            padding: 20px;
            width: 48%;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .help-category h3 {
            color: #333;
        }

        .help-category ul {
            list-style-type: none;
            padding-left: 0;
        }

        .help-category ul li {
            padding: 8px;
            cursor: pointer;
        }

        .help-category ul li:hover {
            background-color: #f0f0f0;
        }

        /* Chat Support */
        .live-chat-widget {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #007bff;
            color: white;
            padding: 15px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .ticket-system, .knowledge-base {
            margin-top: 30px;
            display: flex;
            justify-content: space-between;
        }

        .ticket-system, .knowledge-base {
            background-color: #fff;
            padding: 20px;
            width: 48%;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Contact Form */
        .contact-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 50%;
            margin-top: 20px;
            margin-left: auto;
            margin-right: auto;
        }

        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .contact-form button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .contact-form button:hover {
            background-color: #0056b3;
        }

        /* Ticket History Table */
        .ticket-history-table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .ticket-history-table th, .ticket-history-table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .ticket-history-table th {
            background-color: #f8f8f8;
        }

        /* Pop-up Chat */
        .chat-popup {
            position: fixed;
            bottom: 0;
            right: 20px;
            width: 300px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            padding: 15px;
            display: none;
        }

        .chat-popup h4 {
            color: #333;
            margin-bottom: 10px;
        }

        .chat-popup textarea {
            width: 100%;
            height: 100px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .chat-popup button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .chat-popup button:hover {
            background-color: #0056b3;
        }

        /* Feedback form */
        .feedback-form {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="container">

        <!-- Help Center Search Bar -->
        <div class="search-container">
            <input type="text" placeholder="Search for help articles, FAQs..." id="searchHelp">
            <button onclick="searchHelp()">Search</button>
        </div>

        <h2>Support Center</h2>

        <!-- Help Center Overview -->
        <div class="help-section">
            <!-- Help Categories -->
            <div class="help-category">
                <h3>Popular Help Topics</h3>
                <ul>
                    <li>Account Issues</li>
                    <li>Course Content</li>
                    <li>Technical Support</li>
                    <li>Payment & Billing</li>
                    <li>Exam & Test Queries</li>
                    <li>General Inquiries</li>
                </ul>
            </div>

            <!-- Live Chat Support -->
            <div class="help-category">
                <h3>Chat with Support</h3>
                <p>Instant responses or get connected to an agent.</p>
                <button onclick="openChat()">Start Chat</button>
            </div>
        </div>

        <!-- Ticketing System -->
        <div class="ticket-system">
            <div>
                <h3>Submit a Ticket</h3>
                <form id="ticketForm">
                    <input type="text" placeholder="Ticket Title" required>
                    <textarea placeholder="Describe your issue" required></textarea>
                    <select>
                        <option>Low</option>
                        <option>Medium</option>
                        <option>High</option>
                    </select>
                    <button type="submit">Submit Ticket</button>
                </form>
            </div>

            <div>
                <h3>Ticket History</h3>
                <table class="ticket-history-table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Issue with Payment</td>
                            <td>Resolved</td>
                            <td>2025-01-30</td>
                        </tr>
                        <tr>
                            <td>Access to Course Materials</td>
                            <td>In Progress</td>
                            <td>2025-02-01</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Knowledge Base -->
        <div class="knowledge-base">
            <div>
                <h3>Knowledge Base</h3>
                <ul>
                    <li>How to reset your password</li>
                    <li>How to submit assignments</li>
                    <li>Understanding grading policy</li>
                    <li>Accessing course materials</li>
                </ul>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="contact-form">
            <h3>Contact Support</h3>
            <form>
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
                <input type="text" placeholder="Subject" required>
                <textarea placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>

    <!-- Chat Popup -->
    <div class="chat-popup" id="chatPopup">
        <h4>Chat with Support</h4>
        <textarea placeholder="Type your message..." id="chatMessage"></textarea>
        <button onclick="sendChatMessage()">Send</button>
    </div>

    <!-- Live Chat Widget -->
    <div class="live-chat-widget" onclick="openChat()">
        Live Chat
    </div>

    <script>
        // Function for searching in the help center
        function searchHelp() {
            const searchQuery = document.getElementById('searchHelp').value;
            alert('Searching for: ' + searchQuery);
        }

        // Function to open the chat window
        function openChat() {
            document.getElementById('chatPopup').style.display = 'block';
        }

        // Function to send chat message
        function sendChatMessage() {
            const message = document.getElementById('chatMessage').value;
            if (message.trim() !== '') {
                alert('Message sent: ' + message);
                document.getElementById('chatMessage').value = '';
            }
        }

        // Handle ticket form submission
        document.getElementById('ticketForm').addEventListener('submit', function (e) {
            e.preventDefault();
            alert('Ticket submitted successfully!');
        });
    </script>

</body>
</html>
