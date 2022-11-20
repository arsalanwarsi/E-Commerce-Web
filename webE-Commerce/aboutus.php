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
                    <h1 class="banner-heading">About Us</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->

    <!-- about us start -->
    <section>
        <div class="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col">
                        <h2 class="subHeading">About Us</h2>
                        <h1 class="mainHeading">Where Class Meets Glamour</h1>
                        <div class="aboutus">
                            <p class="mainPara">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, explicabo quibusdam
                                molestiae numquam ratione ullam aut vitae, eos dicta voluptatibus, reprehenderit
                                possimus velit repellendus ducimus? Unde quam nesciunt rem laboriosam impedit at
                                nobis iusto quaerat, minus recusandae error libero distinctio tempora aperiam
                                asperiores officia harum a id velit necessitatibus ipsa quidem? Non excepturi
                                dolorum quibusdam odio pariatur necessitatibus ab accusamus unde nostrum tenetur
                                maiores accusantium doloremque hic soluta, dignissimos odit ex id facilis quo? Porro
                                officiis pariatur rem! Pariatur odio omnis dolores commodi exercitationem nulla,
                                laboriosam cumque minima placeat. Lorem, ipsum dolor sit amet consectetur
                                adipisicing elit. A, quae. Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Cum quae temporibus eum a odit corrupti tempore, blanditiis, eos sit laborum sint
                                nobis adipisci doloribus nesciunt maxime tenetur? Libero! is the a</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="aboutus-picture">
                            <img src="images/aus-jewllery.jpg" alt="jewelry image" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 aboutus">
                        <p class="mainPara">
                            fugiat numquam iure necessitatibus eum nam! Necessitatibus perspiciatis eos nobis
                            cupiditate ut autem beatae voluptates rerum tempore amet.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab laboriosam cumque porro
                            fugiat aliquam, odio nihil magnam quidem nam enim qui eos magni. Porro corrupti a
                            adipisci magni ad odit debitis totam cumque officiis dolorem doloribus eligendi
                            quibusdam, illo laudantium aspernatur unde itaque quisquam minima voluptatibus saepe
                            quasi molestias? Maiores optio labore corporis necessitatibus.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us end -->

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