<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard - Recordings</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #007BFF;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 1.5rem;
        }
        .container {
            width: 90%;
            margin: 0 auto;
            padding-top: 30px;
        }
        .search-bar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .search-bar input,
        .search-bar select {
            padding: 10px;
            width: 30%;
            margin: 5px;
        }
        .recording-card {
            display: flex;
            align-items: center;
            background-color: white;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .recording-card img {
            width: 80px;
            height: 80px;
            border-radius: 8px;
            margin-right: 20px;
        }
        .recording-details {
            flex-grow: 1;
        }
        .progress-bar-container {
            background-color: #ddd;
            height: 10px;
            width: 100%;
            border-radius: 10px;
        }
        .progress-bar {
            background-color: green;
            height: 100%;
            border-radius: 10px;
        }
        .video-container {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
        }
        .video-player {
            width: 70%;
        }
        .video-controls {
            width: 25%;
            padding: 20px;
            background-color: #f1f3f4;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .video-controls button {
            padding: 10px;
            width: 100%;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            margin-top: 10px;
            cursor: pointer;
        }
        .video-controls button:hover {
            background-color: #0056b3;
        }
        .discussion-section {
            margin-top: 40px;
            padding: 20px;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
        .discussion-thread {
            margin-bottom: 15px;
            padding: 10px;
            background-color: #f1f3f4;
            border-radius: 8px;
        }
        .discussion-thread p {
            margin: 0;
        }
        .discussion-thread .reply-btn {
            color: #007BFF;
            cursor: pointer;
        }
        .discussion-thread .reply-btn:hover {
            text-decoration: underline;
        }
        .responsive-video {
            max-width: 100%;
            height: auto;
        }
        .student-engagement {
            margin-top: 20px;
            padding: 10px;
            background-color: #e0f7fa;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .engagement-stat {
            display: flex;
            justify-content: space-between;
            padding: 5px 0;
        }
        .engagement-stat span {
            font-weight: bold;
        }
    </style>
</head>
<body>

    <header>
        <h1>Student Dashboard - Recordings</h1>
    </header>

    <div class="container">
        <!-- Search and Filter Section -->
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Search by course or topic...">
            <select id="filterSubject">
                <option value="">Select Subject</option>
                <option value="Math">Math</option>
                <option value="Physics">Physics</option>
                <option value="History">History</option>
            </select>
            <select id="filterStatus">
                <option value="">Select Status</option>
                <option value="watched">Watched</option>
                <option value="unwatched">Unwatched</option>
            </select>
        </div>

        <!-- Recordings List -->
        <div id="recordingList">
            <!-- Dynamic Content -->
        </div>

        <!-- Video Player and Controls -->
        <div class="video-container">
            <div class="video-player">
                <video id="videoPlayer" controls class="responsive-video">
                    <source id="videoSource" src="" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="video-controls">
                <h3>Video Controls</h3>
                <button id="downloadBtn">Download</button>
                <button id="changeQualityBtn">Change Quality</button>
            </div>
        </div>

        <!-- Student Engagement and Progress Tracking -->
        <div class="student-engagement">
            <h3>Student Engagement</h3>
            <div class="engagement-stat">
                <span>Total Watch Time:</span>
                <span id="watchTime">0:00</span>
            </div>
            <div class="engagement-stat">
                <span>Content Completed:</span>
                <span id="completionStatus">0%</span>
            </div>
        </div>

        <!-- Discussion Section -->
        <div class="discussion-section">
            <h3>Discussion</h3>
            <div class="discussion-thread">
                <p><strong>Instructor:</strong> Dr. John Doe</p>
                <p>Great explanation of Algebra! Can you provide more details on the quadratic formula?</p>
                <span class="reply-btn">Reply</span>
            </div>
            <div class="discussion-thread">
                <p><strong>Student:</strong> Jane Smith</p>
                <p>I had some trouble understanding the last part. Can you clarify the example?</p>
                <span class="reply-btn">Reply</span>
            </div>
        </div>
    </div>

    <script>
        // Mock data for recordings
        const recordings = [
            {
                title: "Math Lecture 1: Introduction to Algebra",
                course: "Math",
                instructor: "Dr. John Doe",
                duration: 2700, // 45 minutes in seconds
                date: "2025-02-01",
                thumbnail: "https://via.placeholder.com/80",
                videoUrl: "https://www.w3schools.com/html/movie.mp4",
                watched: false,
                completedTime: 0, // Track watch duration in seconds
                progress: 0 // Percentage of video watched
            },
            {
                title: "Physics Lecture 1: Basics of Newton's Laws",
                course: "Physics",
                instructor: "Prof. Jane Smith",
                duration: 3600, // 60 minutes in seconds
                date: "2025-01-25",
                thumbnail: "https://via.placeholder.com/80",
                videoUrl: "https://www.w3schools.com/html/movie.mp4",
                watched: true,
                completedTime: 3600, // 100% watched
                progress: 100 // Full progress
            }
        ];

        // Render recordings list
        function renderRecordings() {
            const recordingListContainer = document.getElementById('recordingList');
            recordingListContainer.innerHTML = '';
            recordings.forEach((recording, index) => {
                const card = document.createElement('div');
                card.classList.add('recording-card');
                card.innerHTML = `
                    <img src="${recording.thumbnail}" alt="${recording.title}">
                    <div class="recording-details">
                        <h3>${recording.title}</h3>
                        <p><strong>Course:</strong> ${recording.course}</p>
                        <p><strong>Instructor:</strong> ${recording.instructor}</p>
                        <p><strong>Duration:</strong> ${formatTime(recording.duration)}</p>
                        <p><strong>Date:</strong> ${recording.date}</p>
                        <div class="progress-bar-container">
                            <div class="progress-bar" style="width: ${recording.progress}%"></div>
                        </div>
                    </div>
                    <button onclick="playRecording(${index})">Play</button>
                `;
                recordingListContainer.appendChild(card);
            });
        }

        // Format time in HH:MM:SS
        function formatTime(seconds) {
            const hours = Math.floor(seconds / 3600);
            const minutes = Math.floor((seconds % 3600) / 60);
            const secs = seconds % 60;
            return `${hours}:${minutes.toString().padStart(2, '0')}:${secs.toString().padStart(2, '0')}`;
        }

        // Play selected recording
        function playRecording(index) {
            const videoPlayer = document.getElementById('videoPlayer');
            const videoSource = document.getElementById('videoSource');
            videoSource.src = recordings[index].videoUrl;
            videoPlayer.load();
            videoPlayer.play();
            updateWatchProgress(index);
        }

        // Update student's watch progress
        function updateWatchProgress(index) {
            const videoPlayer = document.getElementById('videoPlayer');
            const watchTimeElement = document.getElementById('watchTime');
            const completionStatusElement = document.getElementById('completionStatus');

            videoPlayer.ontimeupdate = function() {
                const currentTime = videoPlayer.currentTime;
                recordings[index].completedTime = currentTime;
                const progress = (currentTime / recordings[index].duration) * 100;
                recordings[index].progress = progress;

                watchTimeElement.innerText = formatTime(Math.floor(currentTime));
                completionStatusElement.innerText = `${Math.round(progress)}%`;

                if (progress === 100) {
                    alert('You have completed this video!');
                }
            };
        }

        // Handle download button click
        document.getElementById('downloadBtn').addEventListener('click', () => {
            alert("Download feature is not implemented.");
        });

        // Handle quality change button click
        document.getElementById('changeQualityBtn').addEventListener('click', () => {
            alert("Change video quality feature is not implemented.");
        });

        // Initial render of recordings
        renderRecordings();
    </script>
</body>
</html>
