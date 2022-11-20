<?php
SESSION_START();
$size = 0;
if (!isset($_SESSION['username'])) {
    $_SESSION['user-active'] = '✖';
} else {
    $size = sizeof($_SESSION['cart']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Warsi</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- header start -->
    <header>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default bg-color">
                    <div class="col-md-2 col-sm-2">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#my-navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.php">
                                <div class="logo">
                                    <img src="images/j_logo.png" alt="logo">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-10 col-sm-10">
                        <div class="collapse navbar-collapse" id="my-navbar-collapse">
                            <div class="row">
                                <div class="col-md-9 col-sm-9 navigation-bar">
                                    <ul class="nav navbar-nav">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="aboutus.php">About Us</a></li>
                                        <li><a href="menu.php">Shop</a></li>
                                        <li><a href="contactus.php">Contact Us</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-3 icons">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li>
                                            <a href="userAccount.php">
                                                <div class="user-active" data-icon="<?php echo ($_SESSION['user-active']) ?>" id="cart_item_qty">
                                                    <img src="images/user.png" alt="" class="bell-icon" />
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="checkout.php">
                                                <div class="cart-item-qty" data-number="<?php echo ($size) ?>" id="cart_item_qty">
                                                    <img src="images/cart.png" alt="" class="bell-icon" />
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- banner start -->
    <section>
        <div class="banner-main">
            <div class="container">
                <div class="border-banner">
                    <h1 class="banner-heading">Signup</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->

    <!-- add product to cart start -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 user-login">
                    <form action="customerSaving.php" method="post" onSubmit=" return verifyPassword()" enctype="multipart/form-data">
                        <h2 class="subHeading">Signup</h2>
                        <div class="account-select">
                            <p class="mainPara">Create</p>
                            <select required="" name="acc_type">
                                <option hidden="true">Account Type</option>
                                <option value="type_1">Account 1</option>
                                <option value="type_2">Account 2</option>
                                <option value="type_3">Account 3</option>
                            </select>
                            <br>
                        </div>
                        <div class="user-credential">
                            <input type="email" name="email" placeholder="Email Address" required="">
                            <br>
                            <input type="password" name="signup_p" id="signup_p" placeholder="Password" required="" minlength="1" maxlength="14">
                            <br>
                            <input type="password" name="signup_c_p" id="signup_c_p" placeholder="Re-enter Password" required="" minlength="1" maxlength="14">
                            <br>
                            <input type="text" name="f_name" placeholder="First Name" required="">
                            <br>
                            <input type="text" name="l_name" placeholder="Last Name" required="">
                            <br>
                            <input type="text" name="type" placeholder="Type" required="">
                        </div>
                        <div class="terms-check">
                            <input type="checkbox" name="terms" required="">
                            <p>
                                By registering you agree our&nbsp;
                                <strong>
                                    <a href="#">Terms of Use</a>
                                </strong>
                            </p>
                        </div>
                        <div class="login-signup">
                            <button type="submit">Signup</button>
                        </div>
                        <div class="mng-account">
                            <a href="login.php">Already Have an Account ?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- add product to cart end -->

    <!-- footer start -->
    <footer>
        <div class="footerSection">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 right">
                        <hr>
                        <p>@2022 <strong>Domain.</strong> All Right Reserved</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="navigation">
                            <ul>
                                <li><a href="index.php">HOME</a></li>
                                <li><a href="aboutus.php">ABOUT US</a></li>
                                <li><a href="menu.php">SHOP</a></li>
                                <li><a href="contactus.php">CONTACT US</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="contactUs">
                            <a href="#">
                                <img src="images/contactUs.png" alt="contact us pic">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script1.js?v=1"></script>

</body>

</html>