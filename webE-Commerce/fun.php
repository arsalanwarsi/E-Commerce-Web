<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: login.php');
}
array_push($_SESSION['cart'], array($_POST['pd_id'], $_POST['pd_qty']));
header('location: checkout.php');
?>
