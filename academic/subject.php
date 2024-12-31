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
    <title>Subjects</title>
    <!-- Link to Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="stylesubject.css">
</head>
<body>
    <div class="container">
        <h1>Subject Modules</h1>
        <div class="subject-grid">
            <a href="algorithDS.php" class="subject-card">
                <i class=" fas fa-network-wired sub-icon"></i> SE2101 <br> Algorithms, Data Structures, and Complexity
            </a>
            <a href="DBMS.php" class="subject-card">
                <i class="fas fa-database sub-icon"></i> SE2102 <br> Database Management Systems
            </a>
            <a href="os.php" class="subject-card">
                <i class="fas fa-laptop sub-icon"></i> SE2103 <br> Operating Systems Basis
            </a>
            <a href="oop.php" class="subject-card">
                <i class="fas fa-code sub-icon"></i> SE2104 <br> Object Oriented Programming
            </a>
            <a href="requirement.php" class="subject-card">
                <i class="fas fa-pencil-alt sub-icon"></i> SE2105 <br> Requirement Specification and Documentation
            </a>
            <a href="softwareimplementation.php" class="subject-card">
                <i class="fas fa-cogs sub-icon"></i> SE2106 <br> Software Implementation
            </a>
            <a href="analysisfundamentals.php" class="subject-card">
                <i class="fas fa-chart-line sub-icon"></i> SE2107 <br> Analysis Fundamentals
            </a>
            <a href="maths.php" class="subject-card">
                <i class="fas fa-calculator sub-icon"></i> SE2108 <br> Advanced Mathematics
            </a>
            <a href="communicationskill.php" class="subject-card">
                <i class="fas fa-comments sub-icon"></i> SE2109 <br> Communication Skills II
            </a>
            <a href="english.php" class="subject-card english">
                <i class="fas fa-book sub-icon"></i> SE-EGP-1201 <br> General English II
            </a>
        </div>
    </div>

    <script>
        window.addEventListener('load', () => {
            document.body.classList.add('loaded');
        });
    </script>
</body>
</html>

     