<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussion Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .discussion {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            position: relative;
        }
        .discussion:last-child {
            border-bottom: none;
        }
        .title {
            font-size: 16px;
            font-weight: bold;
        }
        .category {
            font-size: 12px;
            color: gray;
        }
        .replies, .subscribe {
            font-size: 12px;
            color: blue;
            cursor: pointer;
            display: inline-block;
            margin-right: 10px;
        }
        .reply-box {
            display: none;
            margin-top: 5px;
        }
        .reply-input {
            width: 100%;
            padding: 5px;
            margin-top: 5px;
        }
        .reply-btn {
            padding: 5px 10px;
            background: blue;
            color: white;
            border: none;
            cursor: pointer;
        }
        .input-section {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }
        input, select {
            flex: 1;
            padding: 8px;
        }
        button {
            padding: 8px 12px;
            background: blue;
            color: white;
            border: none;
            cursor: pointer;
        }
        .notification {
            background: yellow;
            padding: 5px;
            margin: 5px 0;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Discussion Dashboard</h2>

        <!-- Notifications -->
        <div id="notifications"></div>

        <!-- Discussion Threads -->
        <h3>Discussion List</h3>
        <div id="discussion-list">
            <div class="discussion">
                <p class="title">Best resources for learning HTML?</p>
                <p class="category">Category: Courses</p>
                <span class="replies" onclick="toggleReplyBox(this)">💬 5 Replies</span>
                <span class="subscribe" onclick="toggleSubscription(this)">🔔 Subscribe</span>
                <div class="reply-box">
                    <input type="text" class="reply-input" placeholder="Write a reply...">
                    <button class="reply-btn" onclick="postReply(this)">Reply</button>
                </div>
            </div>

            <div class="discussion">
                <p class="title">Help with JavaScript project?</p>
                <p class="category">Category: Assignments</p>
                <span class="replies" onclick="toggleReplyBox(this)">💬 3 Replies</span>
                <span class="subscribe" onclick="toggleSubscription(this)">🔔 Subscribe</span>
                <div class="reply-box">
                    <input type="text" class="reply-input" placeholder="Write a reply...">
                    <button class="reply-btn" onclick="postReply(this)">Reply</button>
                </div>
            </div>
        </div>

        <!-- New Discussion Section -->
        <h3>Start a New Discussion</h3>
        <div class="input-section">
            <input type="text" id="new-discussion" placeholder="Start a new discussion...">
            <select id="discussion-category">
                <option value="General">General</option>
                <option value="Courses">Courses</option>
                <option value="Assignments">Assignments</option>
                <option value="Private">Private</option>
            </select>
            <button onclick="addDiscussion()">Post</button>
        </div>
    </div>

    <script>
        function addDiscussion() {
            let input = document.getElementById('new-discussion');
            let category = document.getElementById('discussion-category').value;
            let title = input.value.trim();
            if (title === '') return;

            let discussionList = document.getElementById('discussion-list');
            let newDiv = document.createElement('div');
            newDiv.classList.add('discussion');
            newDiv.innerHTML = `
                <p class="title">${title}</p>
                <p class="category">Category: ${category}</p>
                <span class="replies" onclick="toggleReplyBox(this)">💬 0 Replies</span>
                <span class="subscribe" onclick="toggleSubscription(this)">🔔 Subscribe</span>
                <div class="reply-box">
                    <input type="text" class="reply-input" placeholder="Write a reply...">
                    <button class="reply-btn" onclick="postReply(this)">Reply</button>
                </div>
            `;
            discussionList.appendChild(newDiv);

            if (category === "Private") {
                showNotification(`Private discussion started: "${title}"`);
            }

            input.value = '';
        }

        function toggleReplyBox(element) {
            let replyBox = element.nextElementSibling.nextElementSibling;
            replyBox.style.display = replyBox.style.display === "block" ? "none" : "block";
        }

        function postReply(button) {
            let replyInput = button.previousElementSibling;
            let replyText = replyInput.value.trim();
            if (replyText === '') return;

            let replyContainer = document.createElement('p');
            replyContainer.style.fontSize = "12px";
            replyContainer.style.marginTop = "5px";
            replyContainer.textContent = "👤 " + replyText;
            button.parentElement.appendChild(replyContainer);
            replyInput.value = '';

            showNotification(`New reply posted: "${replyText}"`);
        }

        function toggleSubscription(element) {
            if (element.textContent.includes("🔔 Subscribe")) {
                element.textContent = "✅ Subscribed";
                element.style.color = "green";
                showNotification("You have subscribed to this discussion.");
            } else {
                element.textContent = "🔔 Subscribe";
                element.style.color = "blue";
                showNotification("You have unsubscribed from this discussion.");
            }
        }

        function showNotification(message) {
            let notificationArea = document.getElementById('notifications');
            let notification = document.createElement('div');
            notification.classList.add('notification');
            notification.textContent = message;
            notificationArea.appendChild(notification);
            setTimeout(() => notification.remove(), 3000);
        }
    </script>

</body>
</html>
