<?php
SESSION_START();
$tax = 0;
$size = 0;
if (!isset($_SESSION['username'])) {
    header('location: login.php');
} else {
    $_SESSION['price'] = 0;
    if (sizeof($_SESSION['cart']) > 0) {
        $tax = 10 * sizeof($_SESSION['cart']);
    } else {
        $_SESSION['discount'] = 0;
    }
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
                    <h1 class="banner-heading">Check Out</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->

    <!-- add product to cart start -->
    <section>
        <div class="container">
            <div class="row check-out-head">
                <div class="col-md-5 col-sm-5">
                    <h2 class="subHeading">Products</h2>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h2 class="subHeading">Quantity</h2>
                </div>
                <div class="col-md-1 col-sm-1">
                    <h2 class="subHeading">Price</h2>
                </div>
                <div class="col-md-2 col-sm-2">
                    <h2 class="subHeading">Total</h2>
                </div>
            </div>
            <?php
            foreach ($_SESSION['cart'] as $key => $value) {
                include('connection.php');
                $sql = "SELECT * FROM `products` WHERE p_id = " . $_SESSION['cart'][$key][0];
                $result = $con->query($sql);
                $data = mysqli_fetch_array($result);
                $_SESSION['price'] = $_SESSION['price'] + ($data['price'] * $_SESSION['cart'][$key][1]);
            ?>
                <div class="row check-out-products">
                    <div class="col-md-5 col-sm-5 check-out-quantity product-check">
                        <ul class="list-inline">
                            <li>
                                <img src="<?php echo $data['image']; ?>" alt="product image">
                            </li>
                            <li>
                                <p class="cop-h1"><?php echo substr($data['description'], 0, 12); ?></p>
                                <p class="mainPara"><?php echo $data['name']; ?></p>
                                <p class="cop-h2"><?php echo substr($data['description'], 0, 40); ?>...</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-3 check-out-quantity">
                        <div class='quantity-button'>
                            <form action="quantity.php?pd_del=<?php echo $key ?>" method="post">
                                <button type="submit" title='Sub' name="sub">-</button>
                                <input class='quality-counter' type="text" value='<?php echo ($_SESSION['cart'][$key][1]) ?>' onkeypress="return false" onkeydown="return false" onkeyup="return false" />
                                <button type="submit" title='Add' name="add">+
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-1 check-out-quantity">
                        <p class="mainPara">$ <?php echo $data['price']; ?></p>
                    </div>
                    <div class="col-md-2 col-sm-2 check-out-quantity">
                        <p class="mainPara">$ <?php echo ($data['price'] * $_SESSION['cart'][$key][1]) ?></p>
                    </div>
                    <div class="col-md-1 col-sm-1 check-out-quantity">
                        <div class="trash-item">
                            <button type="button" onclick="window.location.href='deleteCartItem.php?pd_del=<?php echo $key ?>'">
                                <span class="glyphicon glyphicon-trash"></span>
                            </button>
                        </div>
                    </div>
                </div>
            <?php }
            $_SESSION['price'] = round($_SESSION['price'], 2);
            ?>

            <div class="row check-out-foot">
                <div class="col-md-6 col-sm-6">
                    <h2 class="subHeading">Shopping Summary</h2>
                    <p class="mainPara">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis ab velit nemo
                        corrupti
                        aliquam quidem dolorem optio? Nemo doloribus, praesentium a minima veritatis tenetur libero
                        placeat non aliquam quaerat aspernatur eveniet laborum tempora exercitationem sint eum odit
                        dolores quo atque!</p>
                    <h2 class="subHeading">Have a coupon code?</h2>
                    <div class="shopping-coupon">
                        <form action="couponCode.php" method="post">
                            <input type="text" placeholder="Enter promo code" name="coupon_code" required="" id="promo_code">
                            <button type=" submit"><span class="glyphicon glyphicon-arrow-right"></span></button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6  col-sm-6 check-out-price">
                    <h2 class="subHeading">Subtotal <span>$ <?php echo $_SESSION['price']; ?></span></h2>
                    <h2 class="subHeading">Discount <span>$ <?php echo $_SESSION['discount']; ?></span></h2>
                    <h2 class="subHeading">Tax <span>$ <?php echo $tax ?></span></h2>
                    <div class="space-bar">
                        <hr>
                    </div>
                    <h2 class="subHeading">Total <span>$ <?php echo ($_SESSION['price'] - $_SESSION['discount'] + $tax); ?></span></h2>
                    <div class="login-signup">
                        <button type="submit">Check Out</button>
                    </div>
                    <div class="cont-shopping">
                        <a href="menu.php">Continue Shopping</a>
                    </div>
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
    <!-- <script src="js/script1.js?v=1"></script> -->
    <script src="js/script.js?t=<?= time() ?>" type="text/javascript"></script>
</body>

</html>