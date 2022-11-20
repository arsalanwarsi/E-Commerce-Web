<?php
include('connection.php');
// print_r($_POST);
$c_id = $_GET["c_id"];
$sql = "DELETE FROM `promo_codes` WHERE c_id = " . $c_id;
// echo($sql);
$result = $con->query($sql);
header('location: product.php');
?>
<script>
    // history.back();
</script>