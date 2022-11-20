<?php
session_start();
$pd_del = $_GET['pd_del'];
unset($_SESSION['cart'][$pd_del]);
// header('location: checkout.php');
?>
<script>
    history.back();
</script>