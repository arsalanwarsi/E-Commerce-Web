<?php
include('connection.php');
$code = $_POST['p_code'];
$value = $_POST['p_value'];
$date = $_POST['p_date'];
$status = $_POST['p_status'];

// print_r($_POST);

$sql = "INSERT INTO `promo_codes`(`code`, `value`, `status`, `end_date`) VALUES ('" . $code . "'," . $value . ",'" . $status . "','" . $date . "')";

// echo $sql;
// die();
try {
    $con->query($sql);
?>
    <script>
        alert("Promo Code Added Successfully.");
        window.location.href = "product.php";
    </script>
<?php
} catch (Exception $e) {
?>
    <script>
        alert("Promo Code Not Added");
        window.location.href = "product.php";
    </script>
<?php
}
?>