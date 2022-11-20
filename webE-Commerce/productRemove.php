<?php
include('connection.php');
// print_r($_POST);
$p_id = $_GET["p_id"];
$sql = "DELETE FROM `products` WHERE p_id = " . $p_id;
// echo($sql);
$result = $con->query($sql);
header('location: product.php');
