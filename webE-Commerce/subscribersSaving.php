<?php
include('connection.php');
$email = $_POST['s_email'];
$sql = "INSERT INTO `subscribers`(`email`) VALUES ('" . $email . "')";
try {
    $con->query($sql);
    // header("Location: index.php");
?>
    <script>
        alert('Successfully Subscribe');
        history.back();
    </script>
<?php
} catch (Exception $e) {
    // header("Location: index.php");
?>
    <script>
        alert('Already Subscribed');
        history.back();
    </script>
<?php
}
?>