<?php
SESSION_START();
include('connection.php');
$email = $_POST['login_email'];
$password = $_POST['login_password'];
$check = false;

$sql = "SELECT * FROM `users` WHERE email = '" . $email . "'";

$result = $con->query($sql);
$result = mysqli_fetch_array($result);
if ($result) {
    $check = password_verify($password, $result['password']);
}

if ($check) {
    $_SESSION['username'] = $result['f_name'] . " " . $result['l_name'];
    $_SESSION['cart'] = array();
    $_SESSION['price'] = 0;
    $_SESSION['discount'] = 0;
    $_SESSION['user-active'] = '✔';
    // header("Location: userAccount.php");
?>
    <script>
        history.go(-2);
    </script>
<?php
} else {
?>
    <script>
        alert("Invalid Email or Password");
        history.back();
    </script>
<?php
}
?>