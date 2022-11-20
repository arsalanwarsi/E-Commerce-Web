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

    <?php
    include('connection.php');
    $sql = "SELECT * FROM `products`";
    $result = $con->query($sql);
    // $row = mysqli_fetch_array($result);
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
                    <h1 class="banner-heading">Your Jewelry Is Our Passion</h1>
                    <p class="mainPara">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, blanditiis
                        sunt non architecto
                        maiores accusamus officia suscipit, perferendis recusandae provident maxime? Deleniti harum ad
                        veritatis eos.</p>
                    <div class="learn-more-button">
                        <button>Learn More</button>
                    </div>
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
                    <div class="col-md-6">
                        <h2 class="subHeading">About Us</h2>
                        <h1 class="mainHeading">Where Class Meets Glamour</h1>
                        <div class="aboutus">
                            <p class="mainPara">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda blanditiis
                                totam
                                laboriosam praesentium aspernatur molestias tempore eveniet a sequi sapiente
                                amet
                                veniam
                                quaerat quo aliquid nemo sint magnam, nisi maxime adipisci distinctio laudantium
                                optio!
                                Et voluptas pariatur dolorum earum dicta modi aliquam error nobis dolore
                                voluptatem,
                                ex,
                                fugiat numquam iure necessitatibus eum nam! Necessitatibus perspiciatis eos
                                nobis
                                cupiditate ut autem beatae voluptates rerum tempore amet.</p>
                            <p class="mainPara">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab laboriosam cumque
                                porro
                                fugiat aliquam, odio nihil magnam quidem nam enim qui eos magni. Porro corrupti
                                a
                                adipisci magni ad odit debitis totam cumque officiis dolorem doloribus eligendi
                                quibusdam, illo laudantium aspernatur unde itaque quisquam minima voluptatibus
                                saepe
                                quasi molestias? Maiores optio labore corporis necessitatibus officiis ipsa,
                                facilis
                                ipsum culpa consequatur aperiam, a, expedita aliquam molestias corrupti ratione
                                nisi
                                distinctio veniam et molestiae explicabo sapiente! Explicabo consequuntur facere
                                tenetur
                                eos dolorum. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima
                                cupiditate nesciunt molestiae numquam voluptas deserunt repellat et quos enim.
                                Dicta!</p>
                        </div>
                        <div class="more-button">
                            <a href="aboutus.php">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="aboutus-img">
                            <div class="aboutus-pic1">
                                <img src="images/butterfly.png" alt="butterfly image" class="img-responsive">
                                <div class="aboutus-pic2">
                                    <img src="images/chain.png" alt="cahnin image" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us end -->

    <!-- product start -->
    <section>
        <div class="produtDetail">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 product-about">
                        <h2 class="subHeading">Product</h2>
                        <h1 class="mainHeading">Our Product</h1>
                        <p class="mainPara">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto nventore totam quam voluptates optio quibusdam.</p>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $data = mysqli_fetch_all($result);
                    $t = rand(0, mysqli_num_rows($result) - 4);

                    for ($j = $t; $j < $t + 4; $j++) { ?>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="product-img-home">
                                <img src="<?php echo $data[$j][4]; ?>" alt="produt 1">
                            </div>
                            <h2 class="subHeading"><?php echo $data[$j][1]; ?></h2>
                        </div>
                    <?php
                    }
                    ?>


                    <!-- 
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="product-img-home">
                            <img src="images/product1.png" alt="produt 1">
                        </div>
                        <h2 class="subHeading">Product Name</h2>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="product-img-home">
                            <img src="images/product2.png" alt="produt 2">
                        </div>
                        <h2 class="subHeading">Product Name</h2>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="product-img-home">
                            <img src="images/product3.png" alt="produt 3">
                        </div>
                        <h2 class="subHeading">Product Name</h2>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="product-img-home">
                            <img src="images/product4.png" alt="produt 4">
                        </div>
                        <h2 class="subHeading">Product Name</h2>
                    </div>
                     -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="view-all">
                            <a href="menu.php">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product end -->

    <!-- categories start -->
    <section>
        <div class="categoriesDetail">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 categories">
                        <h2 class="subHeading">Categories</h2>
                        <h1 class="mainHeading">Product By Categories</h1>
                        <p class="mainPara">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto inventore
                            totam
                            quam
                            voluptates optio quibusdam.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="category-img">
                            <img src="images/category1.png" alt="category 1" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="category-img">
                            <img src="images/category2.png" alt="category 2" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="category-img">
                            <img src="images/category3.png" alt="category 3" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 subscribe">
                        <h1 class="mainHeading">Subscribe Our Newsletter</h1>
                        <p class="mainPara">Lorem ipsum dolor sit amet consectetur adipisicing elit. In ab est illum
                            optio
                            debitis
                            minima reprehenderit</p>
                        <div class="input-button">
                            <form action="subscribersSaving.php" method="post" enctype="multipart/form-data">
                                <input type="email" name="s_email" placeholder="Please Enter Your Email" required="">
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- categories end -->

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