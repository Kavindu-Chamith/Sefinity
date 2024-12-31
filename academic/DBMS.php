<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        header('location:../loginPage.html');
        exit(); // Ensure no further code is executed if the user isn't logged in
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DBMS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="oop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  
        <!-- progress bar -->
        <div class="progress-bar">
            <div class="progress" style="width: 60%;"></div> <!-- 60% completed -->
        </div>
        
    <!-- subject details -->
     <section class="sub">
        <h1 class="sub-name">Database Mangement System</h1>
        <h2 class="sub-code"> SE2102</h2>
        <P class="sub-para">Dive into the principles of database design, modeling, and management, including SQL and data retrieval techniques crucial for handling large datasets.</P>
     </section>
      
      <!-- Switch Button -->
      <button class="switch-button" onclick="toggleView()">Switch to Practical</button>

      <!-- Theory Section -->
      <div id="theory-section" class="pdf-grid">
          <a href="path/to/theory1.1.pdf" target="_blank" class="pdf-link">
            <div class="card-content">
                <i class="fa fa-file-pdf-o"></i> <h3>Theory Module 1.1 - PDF</h3> <br><span class="pdf-date">2024-11-09</span>
            </div>
            </a>
          <a href="path/to/theory1.2.pdf" target="_blank" class="pdf-link">
            <div class="card-content">
              <i class="fa fa-file-pdf-o"></i> <h3>Theory Module 1.2 - PDF</h3> <br><span class="pdf-date">2024-11-10</span>
            </div>
          </a>
          <a href="path/to/theory1.3.pdf" target="_blank" class="pdf-link">
            <div class="card-content">
              <i class="fa fa-file-pdf-o"></i> <h3> Theory Module 1.3 - PDF </h3> 
            </div>
          </a>
          <!-- Add more Theory links as needed -->
      </div>

      <!-- Practical Section -->
      <div id="practical-section" class="pdf-grid" style="display: none;">
          <a href="path/to/practical1.1.pdf" target="_blank" class="pdf-link">
            <div class="card-content">
              <i class="fa fa-file-pdf-o"></i> <h3>Practical Module 1.1 - PDF</h3> <br><span class="pdf-date">2024-11-09</span>
            </div>
          </a>
          <a href="path/to/practical1.2.pdf" target="_blank" class="pdf-link">
            <div class="card-content">
              <i class="fa fa-file-pdf-o"></i> <h3> Practical Module 1.2 - PDF</h3>
            </div>
          </a>
          
          <!-- Add more Practical links as needed -->
      </div>

    <script src="scriptoop.js"></script>
    <footer>
        <p>&copy; 2024 Pathum Piyumal. All rights reserved.</p>
        <p><a href="#" class="footer-link">Contact Us</a> | <a href="#"  class="footer-link">Privacy Policy</a></p>  
    </footer>
</body>
</html>