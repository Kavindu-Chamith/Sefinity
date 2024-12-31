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
    <title>requirement</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <link rel="stylesheet" href="styleMaths.css">
    
</head>
<body>
    
        <!-- progress bar -->
        <div class="progress-bar">
            <div class="progress" style="width: 60%;"></div> <!-- 60% completed -->
        </div>
        
    <!-- subject details -->
     <section class="sub">
        <h1 class="sub-name">Requirement Specification and Documentation</h1>
        <h2 class="sub-code"> SE2105</h2>
        <P class="sub-para">Gain skills in documenting software requirements and specifications to ensure clear and efficient project planning and communication.</P>
     </section>
     

      <!-- PDF Grid Container with Cards -->
    <div class="pdf-grid">
        <a href="path/to/pdf1.1.pdf" target="_blank" class="pdf-card">
            <div class="card-content">
                <i class="fas fa-file-pdf pdf-icon"></i>
                <h3>Module 1.1 - PDF</h3>
                <p>2024-11-09</p>
            </div>
        </a>
        <a href="path/to/pdf1.2.pdf" target="_blank" class="pdf-card">
            <div class="card-content">
                <i class="fas fa-file-pdf pdf-icon"></i>
                <h3>Module 1.2 - PDF</h3>
            </div>
        </a>
        
        <a href="path/to/pdf2.1.pdf" target="_blank" class="pdf-card">
            <div class="card-content">
                <i class="fas fa-file-pdf pdf-icon"></i>
                <h3>Module 2.1 - PDF</h3>
            </div>
        </a>
        <a href="path/to/pdf2.1.pdf" target="_blank" class="pdf-card">
            <div class="card-content">
                <i class="fas fa-file-pdf pdf-icon"></i>
                <h3>Module 2.1 - PDF</h3>
            </div>
        </a>
        <a href="path/to/pdf2.1.pdf" target="_blank" class="pdf-card">
            <div class="card-content">
                <i class="fas fa-file-pdf pdf-icon"></i>
                <h3>Module 2.1 - PDF</h3>
            </div>
        </a>
        <a href="path/to/pdf2.1.pdf" target="_blank" class="pdf-card">
            <div class="card-content">
                <i class="fas fa-file-pdf pdf-icon"></i>
                <h3>Module 2.1 - PDF</h3>
            </div>
        </a>
        <!-- Add more links in multiples of 4 if needed -->
    </div>
    <!-- navigation-footer -->
    <footer>
        <p>&copy; 2024 Pathum Piyumal. All rights reserved.</p>
        <p><a href="#" class="footer-link">Contact Us</a> | <a href="#"  class="footer-link">Privacy Policy</a></p>  
    </footer>

</body>
    
    
</html>