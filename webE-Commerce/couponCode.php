<?php
SESSION_START();
include('connection.php');
$coupon = $_POST['coupon_code'];

$sql = "SELECT * FROM `promo_codes` WHERE code = '" . $coupon . "'";

$result = $con->query($sql);
$result = mysqli_fetch_array($result);

if ($result) {
    $_SESSION['discount'] = round(($_SESSION['price'] / 100) * $result['value'], 2);
    // echo $_SESSION['discount'];
    // header('location: checkout.php');
?>
    <script>
        history.back();
    </script>
<?php
} else {
?>
    <script>
        alert("Promo Code Expire.");
        history.back();
    </script>
<?php
}
?>