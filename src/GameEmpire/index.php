<?
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
if(!isset($_SESSION)){
    session_start();
  }
  include("functionsnotif.php");

?>
    <!DOCTYPE html>

    <!--
    Name: GoodGames - Game Portal / Store and eSports HTML Template
    Version: 1.5.1
    Author: nK
    Website: https://nkdev.info/
    Purchase: https://1.envato.market/goodgames
    Support: https://nk.ticksy.com/
    License: You must have a valid license purchased only from ThemeForest (the above link) in order to legally use the theme for your project.
    Copyright 2019.
-->

    <html lang="en">

    <!-- Mirrored from html.nkdev.info/goodgames/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 00:34:55 GMT -->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>GoodGames | Community and Store HTML Game Template</title>

        <meta name="description" content="GoodGames - Bootstrap template for communities and games store">
        <meta name="keywords" content="game, gaming, template, HTML template, responsive, Bootstrap, premium">
        <meta name="author" content="_nK">

        <link rel="icon" type="image/png" href="assets/images/favicon.png">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- START: Styles -->

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">

        <!-- FontAwesome -->
        <script defer src="assets/vendor/fontawesome-free/js/all.js"></script>
        <script defer src="assets/vendor/fontawesome-free/js/v4-shims.js"></script>

        <!-- IonIcons -->
        <link rel="stylesheet" href="assets/vendor/ionicons/css/ionicons.min.css">

        <!-- Flickity -->
        <link rel="stylesheet" href="assets/vendor/flickity/dist/flickity.min.css">

        <!-- Photoswipe -->
        <link rel="stylesheet" type="text/css" href="assets/vendor/photoswipe/dist/photoswipe.css">
        <link rel="stylesheet" type="text/css" href="assets/vendor/photoswipe/dist/default-skin/default-skin.css">

        <!-- Seiyria Bootstrap Slider -->
        <link rel="stylesheet" href="assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css">

        <!-- Summernote -->
        <link rel="stylesheet" type="text/css" href="assets/vendor/summernote/dist/summernote-bs4.css">

        <!-- GoodGames -->
        <link rel="stylesheet" href="assets/css/goodgames.min.css">

        <!-- Custom Styles -->
        <link rel="stylesheet" href="assets/css/custom.css">
        <script src="dist/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="dist/sweetalert.css">

        <!-- END: Styles -->

        <!-- jQuery -->
        <script src="assets/vendor/jquery/dist/jquery.min.js"></script>


    </head>


    <!--
    Additional Classes:
        .nk-page-boxed
-->

    <body>
        <?php 
        if (isset($_GET['add']))
        {$add=$_GET['add'];
         if($add==1)
        echo '<script type="text/javascript">swal("Welcome!", "Your Accont Has Been Registered!", "success");</script>';  
         else echo'<script>swal("Oops...", "Something went wrong! Please check your inputs and try again", "error");</script>';
        }
        ?>





        <!--
    Additional Classes:
        .nk-header-opaque
-->
        <header class="nk-header nk-header-opaque">



            <!-- START: Top Contacts -->
            <div class="nk-contacts-top">
                <div class="container">
                    <div class="nk-contacts-left">
                        <ul class="nk-social-links">
                            <li><a class="nk-social-rss" href="#"><span class="fa fa-rss"></span></a></li>
                            <li><a class="nk-social-twitch" href="#"><span class="fab fa-twitch"></span></a></li>
                            <li><a class="nk-social-steam" href="#"><span class="fab fa-steam"></span></a></li>
                            <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                            <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                            <li><a class="nk-social-twitter" href="https://twitter.com/nkdevv" target="_blank"><span class="fab fa-twitter"></span></a></li>
                            <li><a class="nk-social-pinterest" href="#"><span class="fab fa-pinterest-p"></span></a></li>

                            <!-- Additional Social Buttons
                    <li><a class="nk-social-behance" href="#"><span class="fab fa-behance"></span></a></li>
                    <li><a class="nk-social-bitbucket" href="#"><span class="fab fa-bitbucket"></span></a></li>
                    <li><a class="nk-social-dropbox" href="#"><span class="fab fa-dropbox"></span></a></li>
                    <li><a class="nk-social-dribbble" href="#"><span class="fab fa-dribbble"></span></a></li>
                    <li><a class="nk-social-deviantart" href="#"><span class="fab fa-deviantart"></span></a></li>
                    <li><a class="nk-social-flickr" href="#"><span class="fab fa-flickr"></span></a></li>
                    <li><a class="nk-social-foursquare" href="#"><span class="fab fa-foursquare"></span></a></li>
                    <li><a class="nk-social-github" href="#"><span class="fab fa-github"></span></a></li>
                    <li><a class="nk-social-instagram" href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a class="nk-social-linkedin" href="#"><span class="fab fa-linkedin"></span></a></li>
                    <li><a class="nk-social-medium" href="#"><span class="fab fa-medium"></span></a></li>
                    <li><a class="nk-social-odnoklassniki" href="#"><span class="fab fa-odnoklassniki"></span></a></li>
                    <li><a class="nk-social-paypal" href="#"><span class="fab fa-paypal"></span></a></li>
                    <li><a class="nk-social-reddit" href="#"><span class="fab fa-reddit"></span></a></li>
                    <li><a class="nk-social-skype" href="#"><span class="fab fa-skype"></span></a></li>
                    <li><a class="nk-social-soundcloud" href="#"><span class="fab fa-soundcloud"></span></a></li>
                    <li><a class="nk-social-slack" href="#"><span class="fab fa-slack"></span></a></li>
                    <li><a class="nk-social-tumblr" href="#"><span class="fab fa-tumblr"></span></a></li>
                    <li><a class="nk-social-vimeo" href="#"><span class="fab fa-vimeo"></span></a></li>
                    <li><a class="nk-social-vk" href="#"><span class="fab fa-vk"></span></a></li>
                    <li><a class="nk-social-wordpress" href="#"><span class="fab fa-wordpress"></span></a></li>
                    <li><a class="nk-social-youtube" href="#"><span class="fab fa-youtube"></span></a></li>
                -->
                        </ul>
                    </div>
                    
                    <div class="nk-contacts-right">
                        <ul class="nk-contacts-icons">
                            <li>
                            <span class="nk-cart-toggle">
                            <? if(isset($_SESSION["username"]) ==true){ ?>
                                <span class="fas fa-fw fa-bell"></span>
                                <span class="nk-badge"></span>
                            </span>
                            <? } ?>
                            <div class="nk-cart-dropdown">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><h6> Notifications</h6>
                                            <h6>
                                                <?php
                                                echo $_SESSION['username'];
                                                    $query = "SELECT re.username as user ,re.date,R.username,re.type FROM `reviews` R inner join react re where R.id_rev=re.id_rev  order by `date` DESC";
                                                    $nombre=0;
                                                    if(count(fetchAll($query))>0){
                                                        foreach(fetchAll($query) as $i){
                                                ?>
                                                <a>
                                                    <?php 
                                                    
                                                    if($_SESSION['username']==$i["username"]){
                                                        
                                                        if($_SESSION["username"] != $i["user"]){
                                                            if($i['type']=='1'){
                                                                echo ucfirst($i['user'])." Liked your post.";
                                                                $nombre++;
                                                            }else if($i['type']=='2'){
                                                                echo ucfirst($i['user'])." reacted  on your post.";
                                                                $nombre++;
                                                            }else if($i['type']=='3'){
                                                                echo ucfirst($i['user'])." reacted on your post.";
                                                                $nombre++;
                                                            }else if($i['type']=='4'){
                                                                echo ucfirst($i['user'])." reacted on your post.";
                                                                $nombre++;
                                                            }
                                                        }

                                                    ?>  
                                                    <h6><small><i><?php echo date('F j, Y',strtotime($i['date'])) ?></i></small></h6><br/>  
                                                    <?php
                                                    }else { 
                                                        if ($nombre==0 ){
                                                            //echo "No Records yet.";
                                                            $nombre++;
                                                        
                                                        }
                                                    
                                                    } 
                                                    ?>
                                                </a>
                                                    <?php

                                                    if ($nombre==0){
                                                        echo "No Records yet.";
                                                        $nombre++;
                                                    
                                                    }
                                                    ?>
                                                    <div class="dropdown-divider"></div>
                                                    <?php
                                                        }
                                                    }else{
                                                        echo "No Records yet.";
                                                    }
                                                    ?>
                                            </h6>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#modalSearch">
                                    <span class="fa fa-search"></span>
                                </a>
                            </li>

                            <li>
                                <a href="favourite.php">
                                    <span class="fa fa-heart"></span>
                                </a>
                            </li>
                            <? if(!isset($_SESSION["username"])){ ?>
                <li>
                    <a href="#" data-toggle="modal" data-target="#modalLogin">
                        <span class="fa fa-user"></span>
                    </a>
                </li>
                <? } ?>
                                        <?php  
                            if(isset($_SESSION['username']))  
                            {  
                            ?>  
                                <li>Welcome, <?php echo $_SESSION['username']; ?></li>
                                <li><a href="#" id="logout"><span class="fa fa-sign-out fa-lg"></span></a>  </li>
                                
                            <?php  
                            }
                            ?>  


<?php include_once $_SERVER['DOCUMENT_ROOT'].'/GameEmpire/view/cartContent.php';?>


                        </ul>
                    </div>
                </div>
            </div>
            <!-- END: Top Contacts -->



            <!--
        START: Navbar

        Additional Classes:
            .nk-navbar-sticky
            .nk-navbar-transparent
            .nk-navbar-autohide
    -->
            <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
                <div class="container">
                    <div class="nk-nav-table">

                        <a href="index.php" class="nk-nav-logo">
                            <img src="assets/images/logo.svg" alt="GoodGames" width="199">
                        </a>

                        <ul class="nk-nav nk-nav-right d-none d-lg-table-cell" data-nav-mobile="#nk-nav-mobile">

                            <li>
                                <a href="elements.html">
                Home
                
            </a>
                            </li>
                            <li class=" nk-drop-item">
                                <a href="store.php">
                Store
                
            </a>
                                <ul class="dropdown">

                                    <li>
                                        <a href="store.php">
                Store
                
            </a>
                                    </li>
                                    <li>
                                        <a href="store-product.php">
                Product
                
            </a>
                                    </li>
                                    <li>
                                        <a href="store-catalog.html">
                Catalog
                
            </a>
                                    </li>
                                    <li>
                                        <a href="store-catalog-alt.php">
                Catalog Alt
                
            </a>
                                    </li>
                                    <li>
                                        <a href="store-checkout.php">
                Checkout
                
            </a>
                                    </li>
                                    <li>
                                        <a href="store-cart.php">
                Cart
                
            </a>
                                    </li>

                                </ul>

                            </li>
                            <li>
                                <a href="gallery.html">
                Contact
                
            </a>

                            </li>
                            <li>
                                <a href="gallery.html">
                About Us
            
            </a>
                            </li>
                        </ul>
                        <ul class="nk-nav nk-nav-right nk-nav-icons">

                            <li class="single-icon d-lg-none">
                                <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                                    <span class="nk-icon-burger">
                                    <span class="nk-t-1"></span>
                                    <span class="nk-t-2"></span>
                                    <span class="nk-t-3"></span>
                                    </span>
                                </a>
                            </li>


                        </ul>
                    </div>
                </div>
            </nav>
            <!-- END: Navbar -->

        </header>



        <!--
    START: Navbar Mobile

    Additional Classes:
        .nk-navbar-left-side
        .nk-navbar-right-side
        .nk-navbar-lg
        .nk-navbar-overlay-content
-->
        <div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
            <div class="nano">
                <div class="nano-content">
                    <a href="index.php" class="nk-nav-logo">
                        <img src="assets/images/logo.svg" alt="" width="120">
                    </a>
                    <div class="nk-navbar-mobile-content">
                        <ul class="nk-nav">
                            <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Navbar Mobile -->



        <div class="nk-main">

            <div class="nk-gap-2"></div>



            <div class="container">

                <!-- START: Image Slider -->
                <div class="nk-image-slider" data-autoplay="8000">


                    <div class="nk-image-slider-item">
                        <img src="assets/images/slide-1.jpg" alt="" class="nk-image-slider-img" data-thumb="assets/images/slide-1-thumb.jpg">

                        <div class="nk-image-slider-content">

                            <h3 class="h4">As we Passed, I remarked</h3>
                            <p class="text-white">As we passed, I remarked a beautiful church-spire rising above some old elms in the park; and before them, in the midst of a lawn, chimneys covered with ivy, and the windows shining in the sun.</p>
                            <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read More</a>

                        </div>

                    </div>

                    <div class="nk-image-slider-item">
                        <img src="assets/images/slide-2.jpg" alt="" class="nk-image-slider-img" data-thumb="assets/images/slide-2-thumb.jpg">

                        <div class="nk-image-slider-content">

                            <h3 class="h4">He made his passenger captain of one</h3>
                            <p class="text-white">Now the races of these two have been for some ages utterly extinct, and besides to discourse any further of them would not be at all to my purpose. But the concern I have most at heart is for our Corporation of Poets, from
                                whom I am preparing a petition to your Highness, to be subscribed with the names of one...</p>
                            <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read More</a>

                        </div>

                    </div>

                    <div class="nk-image-slider-item">
                        <img src="assets/images/slide-3.jpg" alt="" class="nk-image-slider-img" data-thumb="assets/images/slide-3-thumb.jpg">

                    </div>

                    <div class="nk-image-slider-item">
                        <img src="assets/images/slide-4.jpg" alt="" class="nk-image-slider-img" data-thumb="assets/images/slide-4-thumb.jpg">

                        <div class="nk-image-slider-content">

                            <h3 class="h4">At length one of them called out in a clear</h3>
                            <p class="text-white">TJust then her head struck against the roof of the hall: in fact she was now more than nine feet high...</p>
                            <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read More</a>

                        </div>

                    </div>

                    <div class="nk-image-slider-item">
                        <img src="assets/images/slide-5.jpg" alt="" class="nk-image-slider-img" data-thumb="assets/images/slide-5-thumb.jpg">

                        <div class="nk-image-slider-content">

                            <h3 class="h4">For good, too though, in consequence</h3>
                            <p class="text-white">She gave my mother such a turn, that I have always been convinced I am indebted to Miss Betsey for having been born on a Friday. The word was appropriate to the moment.</p>
                            <p class="text-white">My mother was so much worse that Peggotty, coming in with the teaboard and candles, and seeing at a glance how ill she was, - as Miss Betsey might have done sooner if there had been light enough, - conveyed her upstairs to
                                her own room with all speed; and immediately dispatched Ham Peggotty, her nephew, who had been for some days past secreted in the house...</p>
                            <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read More</a>

                        </div>

                    </div>

                </div>
                <!-- END: Image Slider -->

                <!-- START: Categories -->
                <div class="nk-gap-2"></div>
                <div class="row vertical-gap">
                    <div class="col-lg-4">
                        <div class="nk-feature-1">
                            <div class="nk-feature-icon">
                                <img src="assets/images/icon-mouse.svg" alt="">
                            </div>
                            <div class="nk-feature-cont">
                                <h3 class="nk-feature-title"><a href="#">PC</a></h3>
                                <h4 class="nk-feature-title text-main-1"><a href="store.php?plat=1">View Games</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="nk-feature-1">
                            <div class="nk-feature-icon">
                                <img src="assets/images/icon-gamepad.svg" alt="">
                            </div>
                            <div class="nk-feature-cont">
                                <h3 class="nk-feature-title"><a href="#">PS4</a></h3>
                                <h4 class="nk-feature-title text-main-1"><a href="store.php?plat=2">View Games</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="nk-feature-1">
                            <div class="nk-feature-icon">
                                <img src="assets/images/icon-gamepad-2.svg" alt="">
                            </div>
                            <div class="nk-feature-cont">
                                <h3 class="nk-feature-title"><a href="#">Xbox</a></h3>
                                <h4 class="nk-feature-title text-main-1"><a href="store.php?plat=3">View Games</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Categories -->



                <div class="row vertical-gap">
                    <div class="col-lg-8">

                        <!-- START: Best Selling -->
                        <div class="nk-gap-3"></div>
                        <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Best</span> Selling</span>
                        </h3>
                        <div class="nk-gap"></div>
                        <div class="row vertical-gap">


                            <div class="col-md-6">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="store-product.php">
                                        <img src="assets/images/product-11-xs.jpg" alt="She gave my mother">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="store-product.php">She gave my mother</a></h3>
                                        <div class="nk-gap-1"></div>

                                        <span class="nk-product-rating">
        <span class="nk-product-rating-front" style="width: 60%;">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </span>
                                        <span class="nk-product-rating-back">
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
        </span>
                                        </span>

                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">€ 14.00</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="store-product.php">
                                        <img src="assets/images/product-12-xs.jpg" alt="A hundred thousand">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="store-product.html">A hundred thousand</a></h3>
                                        <div class="nk-gap-1"></div>

                                        <span class="nk-product-rating">
        <span class="nk-product-rating-front" style="width: 90%;">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </span>
                                        <span class="nk-product-rating-back">
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
        </span>
                                        </span>

                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">€ 20.00</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="store-product.html">
                                        <img src="assets/images/product-13-xs.jpg" alt="So saying he unbuckled">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="store-product.html">So saying he unbuckled</a></h3>
                                        <div class="nk-gap-1"></div>

                                        <span class="nk-product-rating">
        <span class="nk-product-rating-front" style="width: 100%;">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </span>
                                        <span class="nk-product-rating-back">
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
        </span>
                                        </span>

                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">€ 23.00</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="nk-product-cat">
                                    <a class="nk-product-image" href="store-product.html">
                                        <img src="assets/images/product-14-xs.jpg" alt="However, I have reason">
                                    </a>
                                    <div class="nk-product-cont">
                                        <h3 class="nk-product-title h5"><a href="store-product.html">However, I have reason</a></h3>
                                        <div class="nk-gap-1"></div>

                                        <span class="nk-product-rating">
        <span class="nk-product-rating-front" style="width: 60%;">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </span>
                                        <span class="nk-product-rating-back">
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
        </span>
                                        </span>

                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">€ 32.00</div>
                                        <div class="nk-gap-1"></div>
                                        <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- END: Best Selling -->
                    </div>
                    <div class="col-lg-4">
                        <!--
                START: Sidebar

                Additional Classes:
                    .nk-sidebar-left
                    .nk-sidebar-right
                    .nk-sidebar-sticky
            -->
                        <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
                            <div class="nk-widget">
                                <div class="nk-widget-content">
                                    <form action="#" class="nk-form nk-form-style-1" novalidate="novalidate">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Type something...">
                                            <button class="nk-btn nk-btn-color-main-1"><span class="ion-search"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="nk-widget nk-widget-highlighted">
                                <h4 class="nk-widget-title"><span><span class="text-main-1">We</span> Are Social</span>
                                </h4>
                                <div class="nk-widget-content">
                                    <!--
            Social Links 3

            Additional Classes:
                .nk-social-links-cols-5
                .nk-social-links-cols-4
                .nk-social-links-cols-3
                .nk-social-links-cols-2
        -->
                                    <ul class="nk-social-links-3 nk-social-links-cols-4">
                                        <li><a class="nk-social-twitch" href="#"><span class="fab fa-twitch"></span></a></li>
                                        <li><a class="nk-social-instagram" href="#"><span class="fab fa-instagram"></span></a></li>
                                        <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                                        <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                                        <li><a class="nk-social-youtube" href="#"><span class="fab fa-youtube"></span></a></li>
                                        <li><a class="nk-social-twitter" href="https://twitter.com/nkdevv" target="_blank"><span class="fab fa-twitter"></span></a></li>
                                        <li><a class="nk-social-pinterest" href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                        <li><a class="nk-social-rss" href="#"><span class="fa fa-rss"></span></a></li>

                                        <!-- Additional Social Buttons
                <li><a class="nk-social-behance" href="#"><span class="fab fa-behance"></span></a></li>
                <li><a class="nk-social-bitbucket" href="#"><span class="fab fa-bitbucket"></span></a></li>
                <li><a class="nk-social-dropbox" href="#"><span class="fab fa-dropbox"></span></a></li>
                <li><a class="nk-social-dribbble" href="#"><span class="fab fa-dribbble"></span></a></li>
                <li><a class="nk-social-deviantart" href="#"><span class="fab fa-deviantart"></span></a></li>
                <li><a class="nk-social-flickr" href="#"><span class="fab fa-flickr"></span></a></li>
                <li><a class="nk-social-foursquare" href="#"><span class="fab fa-foursquare"></span></a></li>
                <li><a class="nk-social-github" href="#"><span class="fab fa-github"></span></a></li>
                <li><a class="nk-social-linkedin" href="#"><span class="fab fa-linkedin"></span></a></li>
                <li><a class="nk-social-medium" href="#"><span class="fab fa-medium"></span></a></li>
                <li><a class="nk-social-odnoklassniki" href="#"><span class="fab fa-odnoklassniki"></span></a></li>
                <li><a class="nk-social-paypal" href="#"><span class="fab fa-paypal"></span></a></li>
                <li><a class="nk-social-reddit" href="#"><span class="fab fa-reddit"></span></a></li>
                <li><a class="nk-social-skype" href="#"><span class="fab fa-skype"></span></a></li>
                <li><a class="nk-social-soundcloud" href="#"><span class="fab fa-soundcloud"></span></a></li>
                <li><a class="nk-social-steam" href="#"><span class="fab fa-steam"></span></a></li>
                <li><a class="nk-social-slack" href="#"><span class="fab fa-slack"></span></a></li>
                <li><a class="nk-social-tumblr" href="#"><span class="fab fa-tumblr"></span></a></li>
                <li><a class="nk-social-vimeo" href="#"><span class="fab fa-vimeo"></span></a></li>
                <li><a class="nk-social-vk" href="#"><span class="fab fa-vk"></span></a></li>
                <li><a class="nk-social-wordpress" href="#"><span class="fab fa-wordpress"></span></a></li>
            -->
                                    </ul>
                                </div>
                            </div>

                            <div class="nk-widget nk-widget-highlighted">
                                <h4 class="nk-widget-title"><span><span class="text-main-1">Top 3</span> Recent</span>
                                </h4>
                                <div class="nk-widget-content">

                                    <div class="nk-widget-post">
                                        <a href="blog-article.html" class="nk-post-image">
                                            <img src="assets/images/post-1-sm.jpg" alt="">
                                        </a>
                                        <h3 class="nk-post-title"><a href="blog-article.html">Smell magic in the air. Or maybe barbecue</a></h3>
                                        <div class="nk-post-date"><span class="fa fa-calendar"></span> Sep 18, 2018</div>
                                    </div>

                                    <div class="nk-widget-post">
                                        <a href="blog-article.html" class="nk-post-image">
                                            <img src="assets/images/post-2-sm.jpg" alt="">
                                        </a>
                                        <h3 class="nk-post-title"><a href="blog-article.html">Grab your sword and fight the Horde</a></h3>
                                        <div class="nk-post-date"><span class="fa fa-calendar"></span> Sep 5, 2018</div>
                                    </div>

                                    <div class="nk-widget-post">
                                        <a href="blog-article.html" class="nk-post-image">
                                            <img src="assets/images/post-3-sm.jpg" alt="">
                                        </a>
                                        <h3 class="nk-post-title"><a href="blog-article.html">We found a witch! May we burn her?</a></h3>
                                        <div class="nk-post-date"><span class="fa fa-calendar"></span> Aug 27, 2018</div>
                                    </div>

                                </div>
                            </div>



                        </aside>
                        <!-- END: Sidebar -->
                    </div>
                </div>
            </div>

            <div class="nk-gap-4"></div>



            <!-- START: Footer -->


            <div class="nk-copyright">
                <div class="container">
                    <div class="nk-copyright-left">
                        Copyright &copy; 2018 <a href="https://1.envato.market/nk-profile" target="_blank">War Declaration</a>
                    </div>
                    <div class="nk-copyright-right">
                        <ul class="nk-social-links-2">
                            <li><a class="nk-social-rss" href="#"><span class="fa fa-rss"></span></a></li>
                            <li><a class="nk-social-twitch" href="#"><span class="fab fa-twitch"></span></a></li>
                            <li><a class="nk-social-steam" href="#"><span class="fab fa-steam"></span></a></li>
                            <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                            <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                            <li><a class="nk-social-twitter" href="https://twitter.com/nkdevv" target="_blank"><span class="fab fa-twitter"></span></a></li>
                            <li><a class="nk-social-pinterest" href="#"><span class="fab fa-pinterest-p"></span></a></li>

                            <!-- Additional Social Buttons
                        <li><a class="nk-social-behance" href="#"><span class="fab fa-behance"></span></a></li>
                        <li><a class="nk-social-bitbucket" href="#"><span class="fab fa-bitbucket"></span></a></li>
                        <li><a class="nk-social-dropbox" href="#"><span class="fab fa-dropbox"></span></a></li>
                        <li><a class="nk-social-dribbble" href="#"><span class="fab fa-dribbble"></span></a></li>
                        <li><a class="nk-social-deviantart" href="#"><span class="fab fa-deviantart"></span></a></li>
                        <li><a class="nk-social-flickr" href="#"><span class="fab fa-flickr"></span></a></li>
                        <li><a class="nk-social-foursquare" href="#"><span class="fab fa-foursquare"></span></a></li>
                        <li><a class="nk-social-github" href="#"><span class="fab fa-github"></span></a></li>
                        <li><a class="nk-social-instagram" href="#"><span class="fab fa-instagram"></span></a></li>
                        <li><a class="nk-social-linkedin" href="#"><span class="fab fa-linkedin"></span></a></li>
                        <li><a class="nk-social-medium" href="#"><span class="fab fa-medium"></span></a></li>
                        <li><a class="nk-social-odnoklassniki" href="#"><span class="fab fa-odnoklassniki"></span></a></li>
                        <li><a class="nk-social-paypal" href="#"><span class="fab fa-paypal"></span></a></li>
                        <li><a class="nk-social-reddit" href="#"><span class="fab fa-reddit"></span></a></li>
                        <li><a class="nk-social-skype" href="#"><span class="fab fa-skype"></span></a></li>
                        <li><a class="nk-social-soundcloud" href="#"><span class="fab fa-soundcloud"></span></a></li>
                        <li><a class="nk-social-slack" href="#"><span class="fab fa-slack"></span></a></li>
                        <li><a class="nk-social-tumblr" href="#"><span class="fab fa-tumblr"></span></a></li>
                        <li><a class="nk-social-vimeo" href="#"><span class="fab fa-vimeo"></span></a></li>
                        <li><a class="nk-social-vk" href="#"><span class="fab fa-vk"></span></a></li>
                        <li><a class="nk-social-wordpress" href="#"><span class="fab fa-wordpress"></span></a></li>
                        <li><a class="nk-social-youtube" href="#"><span class="fab fa-youtube"></span></a></li>
                    -->
                        </ul>
                    </div>
                </div>
            </div>
            </footer>
            <!-- END: Footer -->


        </div>




        <!-- START: Page Background -->

        <img class="nk-page-background-top" src="assets/images/bg-top.png" alt="">
        <img class="nk-page-background-bottom" src="assets/images/bg-bottom.png" alt="">

        <!-- END: Page Background -->




        <!-- START: Search Modal -->
        <div class="nk-modal modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                        <h4 class="mb-0">Search</h4>

                        <div class="nk-gap-1"></div>
                        <form action="#" class="nk-form nk-form-style-1">
                            <input type="text" value="" name="search" class="form-control" placeholder="Type something and press Enter" autofocus>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Search Modal -->



        <!-- START: Login Modal -->
        <div class="nk-modal modal fade" id="modalLogin" name="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" name="login" id="login" data-dismiss="modal" data-toggle="modal" data-target="#modalLogin" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                        <h4 class="mb-0"><span class="text-main-1">Sign</span> In</h4>

                        <div class="nk-gap-1"></div>
                        <form  class="nk-form text-white">
                            <div class="row vertical-gap">
                                <div class="col-md-6">
                                    Use email and password:

                                    <div class="nk-gap"></div>
                                    <input type="text" value="" name="username" id="username" class=" form-control" placeholder="Email">

                                    <div class="nk-gap"></div>
                                    <input type="password" value="" name="password" id="password" class="required form-control" placeholder="Password">
                                </div>
                                <div class="col-md-6">
                                    Or social account:

                                    <div class="nk-gap"></div>

                                    <ul class="nk-social-links-2">
                                        <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                                        <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                                        <li><a class="nk-social-twitter" href="#"><span class="fab fa-twitter"></span></a></li>
                                    </ul>
                                </div>
                            </div>

                                <div class="nk-gap-1"></div>
                                <div class="row vertical-gap">
                                    <div class="col-md-6">
                                        <input type="submit" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block" value="Sign In" name="login_button" id="login_button">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mnt-5">
                                            <small><a href="#">Forgot your password?</a></small>
                                        </div>
                                        <div class="mnt-5">
                                            <small><a href="createacc.html">Not a member? Sign up</a></small>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Login Modal -->




        <!-- START: Scripts --> 
 <script>  
 $(document).ready(function(){  
      $('#login_button').click(function(){  
           var username = $('#username').val();  
           var password = $('#password').val();  
           if(username != '' && password != '')  
           {  
                $.ajax({  
                     url:"view/login.php",  
                     method:"POST",  
                     data: {username:username, password:password},  
                     success:function(data)  
                     {  
                          if(data == 'Yes') 
                            {  
                            swal("Welcome!", "back!", "success"); 
                          } 
                          if(data == 'No')  
                          {  
                            swal("Error!", "user or pass incorrect!", "warning"); 
                            location.reload();
                          }  
                          else if(data == 'Admin')  {
                                location.href = 'admin/views/';
                          }
                          else  
                          {  
                               $('#modalLogin').hide();  
                               location.reload();  
                          }  
                     }  
                });  
           }  
           else  
           {  
                swal("Error!", "Both Fields are required!", "warning");  
           }  
      });  
      $('#logout').click(function(){  
           var action = "logout";  
           $.ajax({  
                url:"action.php",  
                method:"POST",  
                data:{action:action},  
                success:function()  
                {  
                     location.reload();  
                }  
           });  
      });  
 });  
 </script>  
        <!-- Object Fit Polyfill -->
        <script src="assets/vendor/object-fit-images/dist/ofi.min.js"></script>

        <!-- GSAP -->
        <script src="assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
        <script src="assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>

        <!-- Popper -->
        <script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>

        <!-- Bootstrap -->
        <script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Sticky Kit -->
        <script src="assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>

        <!-- Jarallax -->
        <script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
        <script src="assets/vendor/jarallax/dist/jarallax-video.min.js"></script>

        <!-- imagesLoaded -->
        <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

        <!-- Flickity -->
        <script src="assets/vendor/flickity/dist/flickity.pkgd.min.js"></script>

        <!-- Photoswipe -->
        <script src="assets/vendor/photoswipe/dist/photoswipe.min.js"></script>
        <script src="assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js"></script>

        <!-- Jquery Validation -->
        <script src="assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>

        <!-- Jquery Countdown + Moment -->
        <script src="assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
        <script src="assets/vendor/moment/min/moment.min.js"></script>
        <script src="assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>

        <!-- Hammer.js -->
        <script src="assets/vendor/hammerjs/hammer.min.js"></script>

        <!-- NanoSroller -->
        <script src="assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"></script>

        <!-- SoundManager2 -->
        <script src="assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"></script>

        <!-- Seiyria Bootstrap Slider -->
        <script src="assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js"></script>

        <!-- Summernote -->
        <script src="assets/vendor/summernote/dist/summernote-bs4.min.js"></script>

        <!-- nK Share -->
        <script src="assets/plugins/nk-share/nk-share.js"></script>

        <!-- GoodGames -->
        <script src="assets/js/goodgames.min.js"></script>
        <script src="assets/js/goodgames-init.js"></script>
        <!-- END: Scripts -->



    </body>

    <!-- Mirrored from html.nkdev.info/goodgames/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 00:35:23 GMT -->

    </html>