<?php
SESSION_START();
include('connection.php');
$acc_type = $_POST['acc_type'];
$email = $_POST['email'];
$password = $_POST['signup_p'];
$c_password = $_POST['signup_c_p'];
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$type = $_POST['type'];
$term = $_POST['terms'];


$sql_e = "SELECT * FROM `users` WHERE email = '" . $email . "'";
$result = $con->query($sql_e);

if (mysqli_num_rows($result) == 1) {
?>
    <script>
        alert("Email you entered is already registered\nPlease use an alternate Email");
        history.back();
    </script>
<?php
} else {
    $password = password_hash($password, PASSWORD_BCRYPT);
    $sql = "INSERT INTO `users`(`acc_type`, `email`, `password`, `f_name`, `l_name`, `type`) VALUES ('" . $acc_type . "','" . $email . "','" . $password . "','" . $f_name . "','" . $l_name . "','" . $type . "')";
    $con->query($sql);
    $_SESSION['username'] = $f_name . " " . $l_name;
    $_SESSION['cart'] = array();
    $_SESSION['price'] = 0;
    $_SESSION['discount'] = 0;
    $_SESSION['user-active'] = '✔';
    header("Location: index.php");
}
?>