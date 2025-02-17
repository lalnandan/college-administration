<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student News Feed</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background: #f4f4f4;
        }
        .container {
            max-width: 900px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        h2 {
            color: #007bff;
        }
        .search-bar {
            padding: 10px;
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .tabs {
            display: flex;
            justify-content: space-around;
            background: #007bff;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
            cursor: pointer;
        }
        .tab {
            font-weight: bold;
        }
        .tab:hover {
            text-decoration: underline;
        }
        .feed {
            margin-top: 20px;
        }
        .post {
            background: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
        }
        .post h3 {
            color: #007bff;
        }
        .post p {
            margin: 10px 0;
        }
        .buttons {
            display: flex;
            justify-content: space-between;
        }
        .like-btn, .comment-btn {
            background: #007bff;
            color: white;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .like-btn:hover, .comment-btn:hover {
            background: #0056b3;
        }
        .dark-mode {
            background: #333;
            color: white;
        }
        .dark-mode .container {
            background: #444;
            color: white;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            <h2>📢 Student News Feed</h2>
            <button class="like-btn" onclick="toggleTheme()">🌙 Dark Mode</button>
        </div>

        <input type="text" class="search-bar" placeholder="🔍 Search news, topics, events...">

        <div class="tabs">
            <span class="tab" onclick="filterFeed('announcements')">📢 Announcements</span>
            <span class="tab" onclick="filterFeed('personalized')">🎯 Personalized</span>
            <span class="tab" onclick="filterFeed('social')">🤝 Social</span>
            <span class="tab" onclick="filterFeed('media')">🎥 Media</span>
        </div>

        <div class="feed" id="feed">
            <div class="post" data-category="announcements">
                <h3>📢 University Update</h3>
                <p>Mid-term exams will start from March 10th. Check the schedule in your portal.</p>
                <div class="buttons">
                    <button class="like-btn" onclick="likePost(this)">👍 Like</button>
                    <button class="comment-btn">💬 Comment</button>
                </div>
            </div>

            <div class="post" data-category="personalized">
                <h3>🎯 Career Tips: How to Build Your Resume</h3>
                <p>Check out this guide on crafting a standout resume for internships and jobs.</p>
                <div class="buttons">
                    <button class="like-btn" onclick="likePost(this)">👍 Like</button>
                    <button class="comment-btn">💬 Comment</button>
                </div>
            </div>

            <div class="post" data-category="social">
                <h3>🤝 Discussion: Best Study Techniques</h3>
                <p>Join the debate! What's your favorite study strategy?</p>
                <div class="buttons">
                    <button class="like-btn" onclick="likePost(this)">👍 Like</button>
                    <button class="comment-btn">💬 Comment</button>
                </div>
            </div>

            <div class="post" data-category="media">
                <h3>🎥 Live Webinar: AI in Education</h3>
                <p>Join the live webinar on Artificial Intelligence in learning this Friday.</p>
                <div class="buttons">
                    <button class="like-btn" onclick="likePost(this)">👍 Like</button>
                    <button class="comment-btn">💬 Comment</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function likePost(button) {
            button.innerText = "✅ Liked";
            button.style.background = "#28a745";
        }

        function filterFeed(category) {
            let posts = document.querySelectorAll(".post");
            posts.forEach(post => {
                if (post.getAttribute("data-category") === category || category === "all") {
                    post.style.display = "block";
                } else {
                    post.style.display = "none";
                }
            });
        }

        function toggleTheme() {
            document.body.classList.toggle("dark-mode");
        }
    </script>

</body>
</html>
