<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php echo $title ?></title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="nileforest">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Favicone Icon 
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>/assets/img/favicon.ico">
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>/assets/img/favicon.png">
    <link rel="apple-touch-icon" href="<?php echo base_url() ?>/assets/img/favicon.png"> -->

    <!-- CSS -->
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css" /> 
    <link href="<?php echo base_url() ?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css" /> 
    <link href="<?php echo base_url() ?>/assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>/assets/css/ionicons.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>/assets/css/plugin/jPushMenu.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>/assets/css/plugin/animate.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>/assets/css/jquery-ui.css" rel="stylesheet" type="text/css" />

    <!-- Js -->


</head>

<body class="full-intro">

    <!-- Preloader -->
    <section id="preloader">
        <div class="loader" id="loader">
            <div class="loader-img"></div>
        </div>
    </section>
    <!-- End Preloader -->

    <!-- Sidemenu -->
    <section class="side-menu cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
        <a class="menu-close toggle-menu menu-right push-body"><i class="ion ion-android-close"></i></a>
        <h5 class="white">Sign In</h5>
        <div class="sign-in">
            <input class="input-sm form-full" type="email" aria-required="true" id="email" name="email" placeholder="Email" value="" />
            <input class="input-sm form-full" type="password" aria-required="true" id="password" name="password" placeholder="Password" value="" />
            <input type="submit" class="btn btn-md btn-color-b form-full" value="Sign In" />
            <a>New Customer?</a>
        </div>
        <ul>
            <li><a>Main Demo Page</a></li>
            <li><a>Home</a></li>
            <li><a>About</a></li>
            <li><a>Service</a></li>
            <li><a>Contact Us</a></li>
        </ul>
    </section>
    <!--End Sidemenu -->

    <!-- Site Wraper -->
    <div class="wrapper">

        <!-- HEADER -->
        <header class="header">
            <div class="container">

                <!-- logo -->
                <div class="logo">
                    <a href="<?php echo base_url() ?>">
                        <img class="l-black" src="<?php echo base_url() ?>/assets/img/fastlab1.png" />
                    </a>
                </div>
                <!--End logo-->

                
				<!-- Rightside Menu (Search, Cart, Bart icon) -->
                <div class="side-menu-btn">
                    <ul>
                        <!--Sidebar Menu Icon-->
                        <li class="">
                            <a class="right-icon bar-icon toggle-menu menu-right push-body"><i class="fa fa-bars"></i></a>
                        </li>
                        <!-- End Sidebar Menu Icon-->
                    </ul>
                </div>
                <!-- End Rightside Menu -->
				
				<!-- Navigation Menu -->
                <?php include_once 'top_nav.php' ?>
                <!--End Navigation Menu -->


            </div>
        </header>
        <!-- END HEADER -->