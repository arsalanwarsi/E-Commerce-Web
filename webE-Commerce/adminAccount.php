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
                    <did class="col-md-2 col-sm-2">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#my-navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="product.php">
                                <div class="logo">
                                    <img src="images/j_logo.png" alt="logo">
                                </div>
                            </a>
                        </div>
                    </did>
                    <did class="col-md-10 col-sm-10">
                        <div class="collapse navbar-collapse" id="my-navbar-collapse">
                            <div class="row">
                                <div class="col-md-10 col-sm-10 navigation-bar">
                                    <ul class="nav navbar-nav admin-nav">
                                        <li><a href="product.php">Manage Product</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-2 col-sm-2 icons">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li>
                                            <a href="adminAccount.php">
                                                <img src="images/user.png" alt="" class="bell-icon" />
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                    </did>
                </nav>
            </div>
        </div>
    </header>
    <!-- header end -->

    <div style="text-align:center; width:100%; height:500px; display:flex;justify-content: space-evenly;align-items: center;">
        <h1>
            Admin
        </h1>
        <a href="#">Logout</a>
    </div>

    <!-- footer start -->
    <footer>
        <div class="footerSection admin-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 right">
                        <p>@2022 <strong>Domain.</strong> All Right Reserved</p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js?t=<?= time() ?>" type="text/javascript"></script>
</body>

</html>