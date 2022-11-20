<?php
session_start();
// $pd_del = $_GET['pd_del'];
// $qty = $_SESSION['cart'][$pd_del][1];

if (isset($_POST['sub'])) {
    sub();
}
if (isset($_POST['add'])) {
    add();
}

function sub()
{
    $pd_del = $_GET['pd_del'];
    $qty = $_SESSION['cart'][$pd_del][1];
    if ($qty > 1) {
        $qty--;
        $_SESSION['cart'][$pd_del][1] = $qty;
    }
}

function add()
{
    $pd_del = $_GET['pd_del'];
    $qty = $_SESSION['cart'][$pd_del][1];
    $qty++;
    $_SESSION['cart'][$pd_del][1] = $qty;
}
?>
<script>
    history.back();
</script>