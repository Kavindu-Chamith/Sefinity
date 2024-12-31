<?php
session_start();
include 'connector.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $id == 'signup') {
    $name = $_POST['upname'];
    $email = $_POST['upemail'];
    $password = $_POST['uppassword'];

    // Email validation: check if it starts with '22CSE' and ends with 'ms.sab.ac.lk'
    // if (preg_match("/^22CSE.*@ms\.sab\.ac\.lk$/i", $email)) {
        $SQL_CHK = "SELECT * FROM student_details WHERE s_email = ?";
        $stmt = $con->prepare($SQL_CHK);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result_chk = $stmt->get_result();

        if ($result_chk->num_rows > 0) {
            echo 0; // Email already signed up
        } else {
            $SQL_SIGNUP = "INSERT INTO student_details(s_name, s_email, s_password) VALUES (?, ?, ?)";
            $stmt = $con->prepare($SQL_SIGNUP);
            $stmt->bind_param("sss", $name, $email, $password);
            $stmt->execute();
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            echo 1; // Signup successful
        }
        $stmt->close();
    // } else {
    //     echo "<script>alert('Invalid Email!')</script>";
    // }
}

else if ($_SERVER['REQUEST_METHOD'] == 'POST' && $id == 'signin') {
    $email = $_POST['inemail'];
    $password = $_POST['inpassword'];

    $SQL_SIGNIN = "SELECT * FROM student_details WHERE s_email = ? AND s_password = ?";
    $stmt = $con->prepare($SQL_SIGNIN);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $resultin = $stmt->get_result();

    if ($resultin->num_rows == 0) {
        echo 0; // Signin failed
    } else {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        echo 1; // Signin successful
    }
    $stmt->close();
}

$con->close();
?>
