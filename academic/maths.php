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
    <title>Advanced Mathematics</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <link rel="stylesheet" href="styleMaths.css">
    
</head>
<body>
   
     <!-- Link to your JavaScript file -->
     <script src="maths.js"></script>

    
        <!-- progress bar -->
        <div class="progress-bar">
            <div class="progress" style="width: 60%;"></div> <!-- 60% completed -->
        </div>
        
    <!-- subject details -->
     <section class="sub">
        <h1 class="sub-name">Advanced Mathematics</h1>
        <h2 class="sub-code"> SE1102</h2>
        <P class="sub-para">Cover advanced mathematical concepts and techniques applicable in engineering, including relations, differentiation, and integration.</P>
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
        <a href="path/to/pdf1.3.pdf" target="_blank" class="pdf-card">
            <div class="card-content">
                <i class="fas fa-file-pdf pdf-icon"></i>
                <h3>Module 1.3 - PDF</h3>
            </div>
        </a>
        <a href="path/to/pdf2.1.pdf" target="_blank" class="pdf-card">
            <div class="card-content">
                <i class="fas fa-file-pdf pdf-icon"></i>
                <h3>Module 2.1 - PDF</h3>
            </div>
        </a>
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
                <p>2024-11-09</p>
            </div>
        </a>
        <a href="path/to/pdf1.3.pdf" target="_blank" class="pdf-card">
            <div class="card-content">
                <i class="fas fa-file-pdf pdf-icon"></i>
                <h3>Module 1.3 - PDF</h3>
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
                <p>2024-11-09</p>
            </div>
        </a>
        <a href="path/to/pdf2.1.pdf" target="_blank" class="pdf-card">
            <div class="card-content">
                <i class="fas fa-file-pdf pdf-icon"></i>
                <h3>Module 2.1 - PDF</h3>
                <p>2024-11-09</p>
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
                <p>2024-11-09</p>
            </div>
        </a>
        <a href="path/to/pdf2.1.pdf" target="_blank" class="pdf-card">
            <div class="card-content">
                <i class="fas fa-file-pdf pdf-icon"></i>
                <h3>Module 2.1 - PDF</h3>
                <p>2024-11-09</p>
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