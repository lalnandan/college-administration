<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Dashboard - Syllabus</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f9;
      margin: 0;
      padding: 0;
    }

    .dashboard-container {
      width: 80%;
      margin: auto;
      background-color: white;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .header {
      text-align: center;
      margin-bottom: 20px;
    }

    .syllabus-container {
      display: grid;
      gap: 20px;
    }

    .syllabus-tab {
      background-color: #f9f9f9;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .tab-title {
      background-color: #0066cc;
      color: white;
      padding: 10px;
      font-size: 18px;
      border-radius: 8px 8px 0 0;
    }

    .tab-content {
      padding: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table, th, td {
      border: 1px solid #ddd;
    }

    th, td {
      padding: 12px;
      text-align: left;
    }

    th {
      background-color: #f1f1f1;
    }

    ul {
      list-style-type: none;
      padding: 0;
    }

    ul li {
      padding: 5px 0;
    }

    .interactive-section {
      margin-top: 40px;
      background-color: #e9f5ff;
      padding: 20px;
      border-radius: 8px;
    }

    #student-question {
      width: 100%;
      height: 100px;
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    button {
      background-color: #0066cc;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #004d99;
    }

    .response-box {
      margin-top: 15px;
      padding: 10px;
      background-color: #e0f7e0;
      border: 1px solid #3cb371;
      border-radius: 5px;
      display: none;
    }
  </style>
</head>
<body>

  <div class="dashboard-container">
    <header class="header">
      <h1>Course Syllabus</h1>
    </header>

    <section class="syllabus-container">
      <div class="syllabus-tab">
        <div class="tab-title">Course Overview</div>
        <div class="tab-content">
          <p>Welcome to the course! This section will provide you with the objectives, themes, and major topics we will cover.</p>
          <ul>
            <li>Introduction to the subject</li>
            <li>Key theories and frameworks</li>
            <li>Practical application</li>
          </ul>
        </div>
      </div>

      <div class="syllabus-tab">
        <div class="tab-title">Course Outline</div>
        <div class="tab-content">
          <table>
            <tr>
              <th>Week</th>
              <th>Topic</th>
              <th>Assignments</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Introduction to Course</td>
              <td>Read Chapter 1, Submit Introduction Form</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Advanced Concepts</td>
              <td>Assignment 1 Due</td>
            </tr>
            <!-- More rows as needed -->
          </table>
        </div>
      </div>

      <div class="syllabus-tab">
        <div class="tab-title">Assessment Details</div>
        <div class="tab-content">
          <p>Grading Criteria: Exams, Assignments, and Participation</p>
          <ul>
            <li>Exams: 50%</li>
            <li>Assignments: 30%</li>
            <li>Class Participation: 20%</li>
          </ul>
        </div>
      </div>

      <div class="syllabus-tab">
        <div class="tab-title">Important Dates</div>
        <div class="tab-content">
          <ul>
            <li>Assignment 1 Due: February 15</li>
            <li>Midterm Exam: March 5</li>
            <li>Final Project Due: April 20</li>
          </ul>
        </div>
      </div>

      <div class="syllabus-tab">
        <div class="tab-title">Required Materials</div>
        <div class="tab-content">
          <ul>
            <li>Textbook: "Advanced Studies" by John Doe</li>
            <li>Software: Python (latest version)</li>
          </ul>
        </div>
      </div>

      <div class="syllabus-tab">
        <div class="tab-title">Instructor Info</div>
        <div class="tab-content">
          <p>Dr. Jane Smith</p>
          <p>Email: jane.smith@university.com</p>
          <p>Office Hours: Monday & Wednesday 3-5 PM</p>
        </div>
      </div>
    </section>
    
    <section class="interactive-section">
      <h2>Questions about the syllabus?</h2>
      <textarea id="student-question" placeholder="Type your question here..."></textarea>
      <button onclick="submitQuestion()">Submit Question</button>
      <div id="response" class="response-box"></div>
    </section>
  </div>

  <script>
    function submitQuestion() {
      const question = document.getElementById('student-question').value;
      const responseBox = document.getElementById('response');

      if (question.trim() !== "") {
        // Send an AJAX POST request to the PHP script
        fetch('submit.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
          },
          body: 'question=' + encodeURIComponent(question)
        })
        .then(response => response.json())
        .then(data => {
          responseBox.style.display = "block";
          responseBox.innerHTML = data.success 
            ? data.message 
            : "There was an error submitting your question.";
        })
        .catch(error => {
          responseBox.style.display = "block";
          responseBox.innerHTML = "An error occurred: " + error;
        });
      } else {
        responseBox.style.display = "none";
      }
    }
  </script>

</body>
</html>
