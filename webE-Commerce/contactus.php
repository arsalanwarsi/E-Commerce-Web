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
                    <h1 class="banner-heading">Contact Us</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->

    <!-- contact start -->

    <section>
        <div class="countactus">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="cus-section">
                            <h1 class="cus-heading">We'd love to hear from you</h1>
                            <p class="mainPara">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste,
                                necessitatibus
                            </p>
                        </div>
                        <div class="cus-section">
                            <form action="messageSaving.php" method="post" onSubmit="alert('Thank You!\nWe will get back to you soon.')" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2 class="cus-subheading">Your Name</h2>
                                        <div class="form-input">
                                            <input type="text" name="c_name" placeholder="Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h2 class="cus-subheading">Your Email</h2>
                                        <div class="form-input">
                                            <input type="email" name="c_email" placeholder="Email Address" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="contactus-message">
                                    <h2 class="cus-subheading">Message</h2>
                                    <div class="form-input-message">
                                        <textarea name="c_message" placeholder="Write Message" required=""></textarea>
                                    </div>
                                </div>
                                <div class="input-button">
                                    <button type="submit">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cus-section">
                            <h1 class="cus-heading">Contact Us</h1>
                        </div>
                        <div class="cus-section">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="cus-img">
                                        <img src="images/location.png" alt="address pic">
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="cus-text">
                                        <h2 class="cus-subheading">Address</h2>
                                        <p class="mainPara">Lorem, ipsum dolor sectet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cus-section">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="cus-img">
                                        <img src="images/phone.png" alt="phone pic">
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="cus-text">
                                        <h2 class="cus-subheading">Phone</h2>
                                        <p class="mainPara">Telephone: 000000000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cus-section">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="cus-img">
                                        <img src="images/email.png" alt="email pic">
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="cus-text">
                                        <h2 class="cus-subheading">Email</h2>
                                        <p class="mainPara">example@mail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cus-section">
                            <ul>
                                <li>
                                    <div class="cus-img">
                                        <img src="images/facebook.png" alt="facebook pic">
                                        <img src="images/twitter.png" alt="twitter pic">
                                        <img src="images/insta.png" alt=insta pic">
                                        <img src="images/linkedin.png" alt=linkedin pic">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact end -->

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
</body>

</html>