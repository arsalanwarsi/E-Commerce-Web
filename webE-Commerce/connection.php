<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'dbecommerceweb';

    $con = mysqli_connect($servername,$username,$password,$database);

    if(!$con){
        die('error');
    }
?>