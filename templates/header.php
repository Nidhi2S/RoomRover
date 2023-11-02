<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Houston | Home Two</title>
  <!-- google fonts roboto regular -->
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,700,300,500' type='text/css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lora:400,700' type='text/css'>
  <link rel="stylesheet" href="../../assets/css/owl.carousel.css">
  <link rel="stylesheet" href="../../assets/css/jquery-ui.css">
  <link rel="stylesheet" href="../../assets/css/jquery-ui.structure.css">
  <link rel="stylesheet" href="../../assets/css/jquery-ui.theme.min.css">
  <link rel="stylesheet" href="../../assets/css/jquery.timepicker.css">
  <link rel="stylesheet" href="../../assets/css/jquery.countdown.css">
  <link rel="stylesheet" href="../../assets/css/flexslider.css">
  <link rel="stylesheet" href="../../assets/css/red.css">
  <link rel="stylesheet" href="../../assets/css/select2.css">
  <link rel="stylesheet" href="../../assets/css/jquery.raty.css" >
  <link rel="stylesheet" href="../../assets/css/hotel.style.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->

</head>
<body>
  <div id="rq-circle-loader-wrapper">
    <div id="rq-circle-loader-center">
      <div class="rq-circle-load">
        <img src="assets/img/oval.svg" alt="Page Loader">
      </div>
    </div>
  </div>
  <!--================================
                SIDE MENU
    =================================-->
    <!-- PAGE OVERLAY WHEN MENU ACTIVE -->
    <div class="rq-side-menu-overlay"></div>
    <!-- PAGE OVERLAY WHEN MENU ACTIVE END -->

    <div class="rq-side-menu-wrap">
        <!-- OVERLAY -->
        <div class="rq-dark-overlay"></div>
        <!-- OVERLAY END -->

        <div id="rq-side-menu" class="rq-side-menu">
            <div class="rq-side-menu-widget-wrap">
                <div class="rq-login-form-wrapper">
                 
                    <p>Login to add new listing </p>

                    <?php require "/var/www/html/php/tour_and_travels/src/view/sign_up.php" ?>

                    <div class="rq-social-login-opt">
                        <a href="#" class="rq-social-login-btn rq-facebook-login">Login with Facebook</a>
                        <a href="#" class="rq-social-login-btn rq-twitter-login">Login with Twitter</a>
                    </div>

                    <div class="rq-other-options">
                        <a href="#" class="rq-forgot-pass">Forget Password ?</a>
                        <a href="#" class="rq-signup">Sign in</a>
                    </div>
                </div>
            </div>
        </div>

        <button class="rq-side-menu-close-button" id="rq-side-menu-close-button">Close Menu</button>
    </div>
    <!-- SIDE MENU END -->


  <header>
    <!-- Navigation Menu start-->
    <nav class="navbar rq-header-main-menu navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <!-- Navbar Toggle -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Logo -->
            <a class="navbar-brand" href="index.php"><img class="logo" src="http://localhost:8000/assets/img/logo.png" alt="Houston"></a>
        </div>
        <!-- Navbar Toggle End -->

        <!-- navbar-collapse start-->
        <div id="nav-menu" class="navbar-collapse rq-menu-wrapper collapse" role="navigation">
          <ul class="nav navbar-nav rq-menus">
              <li class="active">
                <a href="home.php">Home</a>
                <ul class="rq-sub-menu">
                    <li>
                        <a href="index.html">Homepage 1</a>
                    </li>
                </ul>
              </li>
              <li>
                <a href="select-room-grid.html">Room</a>
                <ul class="rq-sub-menu">
                    <li>
                        <a href="select-room-grid.html">Room</a>
                    </li>
                    <li>
                        <a href="single-room.html">Single Room</a>
                    </li>
                </ul>
              </li>
              <li>
                <a href="about-us.html">About</a>
              </li>
              <li>
                <a href="listing-style-1.html">Pages</a>
                <ul class="rq-sub-menu">
                    <li>
                        <a href="cart.html">Cart</a>
                    </li>
                    <li>
                        <a href="checkout.html">Check Out</a>
                    </li>
                    <li>
                        <a href="comming-soon.html">Comming Soon</a>
                    </li>
                    <li>
                        <a href="404.html">404</a>
                    </li>
                    <li>
                      <a href="http://localhost:8000/src/view/business_page.php">Business</a>
                    </li>
                </ul>
              </li>
              <li>
                <a href="blog.html">Blog</a>
                <ul class="rq-sub-menu">
                    <li>
                        <a href="blog.html">Blog</a>
                    </li>
                    <li>
                        <a href="blog-details.html">Blog Details</a>
                    </li>
                </ul>
              </li>
              <li>
                <a href="contact.html">Contact</a>
              </li>
          </ul>
        </div>
        <!-- navbar-collapse end-->

        <div class="rq-extra-btns-wrapper">
            <div class="rq-language">
                <select class="js-example-placeholder-single form-control">
                    <option value="Eng">EN</option>
                    <option value="Spn">SPN</option>
                    <option value="Ger">GER</option>
                    <option value="Rus">RUS</option>
                </select>
            </div>
            <button id="rq-side-menu-btn" class="cd-btn btn rq-sidemenu-btn"></button>
        </div>

      </div>
    </nav>
    <!-- Navigation Menu end-->
  </header> <!-- / rq-header-section end here-->
