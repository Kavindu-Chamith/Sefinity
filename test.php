<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location:loginPage.html');
    exit(); // Ensure no further code is executed if the user isn't logged in
}

// Include the external HTML file
include('C:/xampp/htdocs/batch.final/batch.custom/academia 2/subject.html');

?>
