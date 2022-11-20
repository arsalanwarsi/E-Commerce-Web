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
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>

<body>
    <?php
    include('connection.php');
    $p_id = $_GET["productid"];
    $sql = "SELECT * FROM `products` WHERE p_id = " . $p_id;
    $result = $con->query($sql);
    $data = mysqli_fetch_array($result);
    ?>

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
                    <h1 class="banner-heading">Product Detail</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->

    <!-- details start -->
    <section>
        <div class="detail-product">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-image">
                            <div class="product-main-img">
                                <img src="<?php echo $data['image']; ?>" alt="">
                            </div>
                            <div class="product-sub-img">
                                <img src="<?php echo $data['image']; ?>" alt="">
                                <img src="<?php echo $data['image']; ?>" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="product-more-details">
                            <h2 class="subHeading"><?php echo $data['name']; ?><span>$ <?php echo $data['price']; ?></span></h2>
                            <div class="starts">
                                <ul>
                                    <li><img src="images/start0.png" alt="start"></li>
                                    <li><img src="images/start0.png" alt="start"></li>
                                    <li><img src="images/start0.png" alt="start"></li>
                                    <li><img src="images/start1.png" alt="start"></li>
                                    <li><img src="images/start1.png" alt="start"></li>
                                </ul>
                            </div>
                            <div class="aboutus">
                                <p class="mainPara">
                                    <?php echo $data['description']; ?>
                                </p>
                            </div>
                            <div class=" item-detail">
                                <ul>
                                    <!-- <li>
                                        <h3>Quantity:</h3>
                                    </li>
                                    <li>
                                        <div class='quantity-button'>
                                            <button class='down_count' title='Down'>-</button>
                                            <input class='quality-counter' type="text" value='0' />
                                            <button class='up_count' title='Up'>+</button>
                                        </div>
                                    </li> -->
                                </ul>
                                <ul>
                                    <li>
                                        <img src="images/car.png" alt="deliver car image">
                                    </li>
                                    <li>
                                        <p class="mainPara">Lorem ipsum dolor sit amet consectetur.</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <img src="images/tag.png" alt="product tag image">
                                    </li>
                                    <li>
                                        <p class="mainPara">Lorem ipsum dolor sit amet consectetur.</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="more-button">
                                <a href="cart.php?productid=<?php echo $p_id; ?>">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- details end -->

    <!-- description button start -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                    <div class="category">
                        <div class="category-select">
                            <ul>
                                <li>
                                    <div class="select">
                                        <button onclick="description()">Description</button>
                                    </div>
                                </li>
                                <li>
                                    <div class="select">
                                        <button onclick="reviews()">Reviews</button>
                                    </div>
                                </li>
                                <li>
                                    <div class="select">
                                        <button onclick="info()">Info</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- description button end -->

    <!-- description start -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 description" id="dec1">
                    <p class="mainPara">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda incidunt
                        quae
                        deleniti repellat cum, quo ad facilis adipisci nemo hic accusantium nobis, ratione
                        animi quaerat soluta perspiciatis maxime. Iure tempora quia impedit neque molestiae
                        consequuntur assumenda ea sapiente, porro cumque enim itaque reiciendis a fugit unde
                        voluptatem id delectus explicabo ipsum cum. Esse, ex non rem nam a eius aspernatur
                        ab dolores natus officia facere enim asperiores magnam ut et soluta voluptas
                        molestias alias cupiditate corrupti reprehenderit distinctio nihil! Suscipit rerum
                        reiciendis quia porro perferendis? Natus fuga incidunt ipsa perferendis
                        necessitatibus quas optio fugiat dolores et impedit? Ipsam officiis impedit velit
                        cupiditate voluptatum excepturi, nam est sequi deleniti recusandae. Adipisci
                        deserunt doloremque exercitationem neque ratione nostrum vel accusantium quas
                        numquam laudantium, nemo vero fuga aperiam delectus ut quasi magnam hic perferendis
                        cum natus non officia repellendus quisquam. Maiores atque, porro sint, nesciunt
                        facere dignissimos nihil pariatur voluptates obcaecati fuga quae.</p>
                </div>
                <div class="col-md-12 description" id="dec2">
                    <p class="mainPara">Reviews</p>
                </div>
                <div class="col-md-12 description" id="dec3">
                    <p class="mainPara">Additional Information</p>
                </div>
            </div>
        </div>

    </section>

    <!-- description end -->

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