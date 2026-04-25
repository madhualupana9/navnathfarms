<!DOCTYPE HTML>
<html lang="en">
    

<head>
    <!-- Basic Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO Meta Tags -->
    <?php
    $defaultTitle = "Navanath Natural Farms | Traditional Farming & Pure Produce";
    $defaultDesc = "Navanath Natural Farms brings back the wisdom of traditional farming with 100% chemical-free, nutrient-rich produce. Experience the purity of indigenous rice, millets, and cold-pressed oils.";
    $defaultKeywords = "Navanath Natural Farms, Traditional Farming, Indigenous Rice, Millets, Organic Turmeric, Cold-Pressed Oils, Chilli Powder, Pulses, Natural Farming";
    
    $title = isset($pageTitle) ? $pageTitle . " | Navanath Natural Farms" : $defaultTitle;
    $description = isset($metaDescription) ? $metaDescription : $defaultDesc;
    $keywords = isset($metaKeywords) ? $metaKeywords : $defaultKeywords;
    ?>
    
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="author" content="Navanath Natural Farms">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://navnathfarms.com/">
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:image" content="https://navnathfarms.com/assets/img/Navanath-Farms-Final-Logo2.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://navnathfarms.com/">
    <meta property="twitter:title" content="<?php echo $title; ?>">
    <meta property="twitter:description" content="<?php echo $description; ?>">
    <meta property="twitter:image" content="https://navnathfarms.com/assets/img/Navanath-Farms-Final-Logo2.jpg">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://navnathfarms.com<?php echo $_SERVER['PHP_SELF']; ?>">

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    
    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/elegant-icons.css" rel="stylesheet">
    <link href="assets/css/flaticon-set.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/navnath.css" rel="stylesheet">
    <link href="assets/css/helper.css" rel="stylesheet">
    <link href="assets/css/shop.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/unit-test.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
    <!-- ========== End Stylesheet ========== -->
    </head>
    <body>
    <div class="top-bar-area text-light" style="background: #c1c439;">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-9">
                    <div class="flex-item left">
                        <p>
                            That's right, we only sell 100% natural
                        </p>
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt"></i> Hyderabad, Telangana.
                            </li>
                            <li>
                                <i class="fas fa-phone-alt"></i> +91 85208 26624
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 text-end">
                    <div class="social">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        <nav class="navbar mobile-sidenav inc-shape navbar-common navbar-sticky navbar-default validnavs">

            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container-xl">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container d-flex justify-content-between align-items-center">            
                

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/img/Navanath-Farms-Final-Logo2.jpg" class="logo" alt="Navanath Natural Farms Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Main Nav -->
                <div class="main-nav-content">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">

                        <img src="assets/img/Navanath-Farms-Final-Logo2.jpg" alt="Navanath Natural Farms Logo">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-times"></i>
                        </button>
                        
                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                            <li>
                                <a  href="index.php"  >Home</a>
                            </li>
                            <li>
                                <a  href="about.php">About Us</a>
                            </li>
                            <li class="dropdown">
                                <a  href="products.php">Products</a>
                            </li>
                            <li>
                                <a  href="community.php" >Join Community</a>
                                
                            </li>
                            <li>
                                <a  href="process.php" >Our Process</a>
                                
                            </li>
                            <li>
                                <a  href="contact.php">Contact Us</a>
                                
                            </li>
                           
                        </ul>
                    </div><!-- /.navbar-collapse -->

                    <div class="attr-right">
                        <!-- Start Atribute Navigation -->
                        <!-- <div class="attr-nav">
                            <ul>
                                <li class="contact">
                                    <div class="call">
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="info">
                                            <p>Have any Questions?</p>
                                            <h5><a href="mailto:info@navnathfarms.com">info@navnathfarms.com</a></h5>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> -->
                        <!-- End Atribute Navigation -->

                    </div>

                    <!-- Overlay screen for menu -->
                    <div class="overlay-screen"></div>
                    <!-- End Overlay screen for menu -->

                </div>
                <!-- Main Nav -->

            </div>   
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->