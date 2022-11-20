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
                    <h1 class="banner-heading">Our Products</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->

    <!-- menu start -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 ourProduct">
                    <h1 class="mainHeading">Our Products</h1>
                    <p class="mainPara">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quasi vitae odit harum,
                        possimus vel libero corrupti error exercitationem blanditiis iure, delectus.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- menu end -->

    <!-- category select start -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                    <div class="category">
                        <div class="category-select">
                            <ul>
                                <li>
                                    <div class="select">
                                        <button onclick="MyProducts1()">Category 1</button>
                                    </div>
                                </li>
                                <li>
                                    <div class="select">
                                        <button onclick="MyProducts2()">Category 2</button>
                                    </div>
                                </li>
                                <li>
                                    <div class="select">
                                        <button onclick="MyProducts3()">Category 3</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- category select end -->

    <!-- products start -->
    <section>
        <div class="productDetail" id="my_products1">
            <div class="container">
                <div class="row">

                    <?php
                    include('connection.php');
                    $sql = "Select * From products";
                    $result = $con->query($sql);
                    while ($row = mysqli_fetch_array($result)) { ?>

                        <div class="col-md-6 col-sm-6">
                            <div class="product">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="product-img">
                                            <a href="productDetail.php?productid=<?php echo $row['p_id']; ?>">
                                                <img src="<?php echo $row['image']; ?>" alt="product">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="product-detail">
                                            <img src="images/starts.png" alt="rating">
                                            <h2 class="subHeading"><?php echo $row['name']; ?></h2>
                                            <p class="mainPara"><?php echo substr($row['description'], 0, 130); ?> ...</p>
                                            <div class="more-detail">
                                                <a href="productDetail.php?productid=<?php echo $row['p_id']; ?>">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="productDetail" id="my_products2">
            <div class="container">
                <div class="row">

                    <?php
                    include('connection.php');
                    $sql = "Select * From products WHERE status = 1";
                    $result = $con->query($sql);
                    while ($row = mysqli_fetch_array($result)) { ?>

                        <div class="col-md-6 col-sm-6">
                            <div class="product">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="product-img">
                                            <a href="productDetail.php?productid=<?php echo $row['p_id']; ?>">
                                                <img src="<?php echo $row['image']; ?>" alt="product">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="product-detail">
                                            <img src="images/starts.png" alt="rating">
                                            <h2 class="subHeading"><?php echo $row['name']; ?></h2>
                                            <p class="mainPara"><?php echo substr($row['description'], 0, 130); ?> ...</p>
                                            <div class="more-detail">
                                                <a href="productDetail.php?productid=<?php echo $row['p_id']; ?>">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="productDetail" id="my_products3">
            <div class="container">
                <div class="row">

                    <?php
                    include('connection.php');
                    $sql = "Select * From products WHERE status = 0";
                    $result = $con->query($sql);
                    while ($row = mysqli_fetch_array($result)) { ?>

                        <div class="col-md-6 col-sm-6">
                            <div class="product">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="product-img">
                                            <a href="productDetail.php?productid=<?php echo $row['p_id']; ?>">
                                                <img src="<?php echo $row['image']; ?>" alt="product">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="product-detail">
                                            <img src="images/starts.png" alt="rating">
                                            <h2 class="subHeading"><?php echo $row['name']; ?></h2>
                                            <p class="mainPara"><?php echo substr($row['description'], 0, 130); ?> ...</p>
                                            <div class="more-detail">
                                                <a href="productDetail.php?productid=<?php echo $row['p_id']; ?>">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- products end -->

    <!-- page select start -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                    <div class="page">
                        <div class="page-select">
                            <ul>
                                <li>
                                    <div class="select">
                                        <a href="#">&laquo;</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="select">
                                        <a href="#">01</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="select">
                                        <a href="#">02</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="select">
                                        <a href="#">03</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="select">
                                        <a href="#">04</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="select">
                                        <a href="#">05</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="select">
                                        <a href="#">&raquo;</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page select end -->

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