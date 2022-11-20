<?php
    include('connection.php');
    $name = $_POST['c_name'];
    $email = $_POST['c_email'];
    $message = $_POST['c_message'];
    $sql = "INSERT INTO `messages`(`name`, `email`, `message`) VALUES ('".$name."','".$email."','".$message."')";
    $con->query($sql);
    header("Location: contactus.php");
?>