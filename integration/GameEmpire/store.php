<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if(!isset($_SESSION)){
    session_start();
  }

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

<!-- Mirrored from html.nkdev.info/goodgames/store-catalog-alt.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 00:35:43 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>GoodGames | Action Games</title>

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
    
    <!-- END: Styles -->

    <!-- jQuery -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    
    
</head>


<!--
    Additional Classes:
        .nk-page-boxed
-->
<body>
    
        



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
                    <a href="#" data-toggle="modal" data-target="#modalSearch">
                        <span class="fa fa-search"></span>
                    </a>
                </li>

                <li>
                    <a href="favourite.php">
                        <span class="fa fa-heart"></span>
                    </a>
                </li>
                
                
                <li>
                    <a href="#" data-toggle="modal" data-target="#modalLogin">
                        <span class="fa fa-user"></span>
                    </a>
                </li>
                <?php  
                if(isset($_SESSION['username']))  
                {  
                ?>  
                     <li>Welcome, <?php echo $_SESSION['fname']; ?></li>
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

    

<!-- START: Navbar

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

                            <li >
                                <a href="index.php">
                                    Home
                                </a>
                                </li>
                                <li  class="active" >
                                    <a href="store.php">
                                    Store
                                    
                                </a>
                                </a>
                                <li class=" nk-drop-item">
            <a href="">
                Events
                
            </a><ul class="dropdown">
                        
        <li>
            <a href="events.php">
                All 
                
            </a>
        </li>
        <li>
            <a href="expo.php">
                Expo
                
            </a>
        </li>
        <li>
            <a href="convention.php">
                Convention
                
            </a>
        </li>
        <li>
            <a href="tournament.php">
                Tournament
                
            </a>
        </li>
        <li>
            <a href="festival.php">
                Festival
                
            </a>
        </li>
        
        
                    </ul>                

                                    <li>
                                        <a href="contact.php">
                                    Contact
                            
                                </a>

                                    </li>
                                    <li>
                                        <a href="about.php">
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
        
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs">
        
        
        <li><a href="index.php">Home</a></li>
        
        
        <li><span class="fa fa-angle-right"></span></li>
        
        <li><a href="store.php">Store</a></li>
        
        
        <li><span class="fa fa-angle-right"></span></li>
        
        <li><span>STORE</span></li>
        
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->

        

        
<div class="container">
    <!-- START: Categories -->
    <div class="row vertical-gap">
        <div class="col-lg-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <img src="assets/images/icon-mouse.svg" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title"><a href="?plat=1">PC</a></h3>
                    <h3 class="nk-feature-title text-main-1"><a href="?plat=1">View Games</a></h3>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <img src="assets/images/icon-gamepad.svg" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title"><a href="?plat=2">PS4</a></h3>
                    <h3 class="nk-feature-title text-main-1"><a href="?plat=2">View Games</a></h3>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <img src="assets/images/icon-gamepad-2.svg" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title"><a href="?plat=3">Xbox</a></h3>
                    <h3 class="nk-feature-title text-main-1"><a href="?plat=3">View Games</a></h3>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Categories -->





    <!-- START: Products Filter -->
    <div class="nk-gap-2"></div>
    <div class="row vertical-gap">
        
                

                <form class="col-lg-4" method="get">
                <div class="input-group"> 
                    <select class="form-control" name="cat">
                          <option value="" disabled selected>Select Category</option>
                          <option  value="Action">Action</option>
                          <option  value="Sports">Sports</option>
                          <option  value="Racing">Racing</option>
                          <option  value="Horror">Horror</option>
                          <option  value="Strategy">Strategy</option>
                          <option  value="Adventure">Adventure</option>
                          <option  value="Sci Fi">Sci Fi</option>
                          <option  value="RPG">RPG</option>
                    </select>
                    <button href="?apply=<?php echo $cat; ?>" class="nk-btn nk-btn-rounded nk-btn-color-white" type="submit">Apply</button>
                </div> 
                
                </form>

                <form class="col-lg-4">
                <div class="input-group"> 
                    <select class="form-control" name="sort">
                        <option value="" disabled selected>Sort By</option>
                        <option value="1">Score ↑</option>
                        <option value="2">Score ↓</option>
                        <option value="3">Price ↑</option>
                        <option value="4">Price ↓</option> 
                        <option value="5">Name ↑</option>
                        <option value="6">Name ↓</option>
                        <option value="7">Newest</option>
                        <option value="8">Oldest</option>
                    </select>
                
                    <button href="?apply=<?php echo $sort; ?>" class="nk-btn nk-btn-rounded nk-btn-color-white" type="submit">Apply</button>
                </div> 
                
                </form>
            
                <form  class="col-lg-4" >
                        <div class="input-group" > 
                            <input type="text" class="form-control" name="search" placeholder="Search something..." action="favourite.php">
                            <button class="nk-btn nk-btn-color-main-1"><span class="ion-search"></span></button>
                        </div> 
                </form>
    </div>

    <!-- PLAT -->
        <div class="nk-gap-2"></div>

            <div class="row vertical-gap">
            <?php 

            //include "config.php";
            $id=0;
                     function image($id){
                    $query = "SELECT name FROM image where id_game='$id'";  
                    $db = config::getConnexion();
                    $req2 = $db->prepare($query);
                    $req2->execute();
                    $liste2 = $req2->fetchAll();
                    foreach($liste2 as $row){
                             
            
                        echo'<img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" />';
                        }
                    }
            if (isset($_GET['cat'])) {
            $c=$_GET['cat'];
            $sql="select * From game WHERE category LIKE '$c';";}
            elseif (isset($_GET['search'])) {
            $s=$_GET['search'];
            $sql="select * From game WHERE name LIKE '$s';";}
            elseif (isset($_GET['plat']))
            {
            $pl=$_GET['plat'];
            $sql="select * From game where id_plat='$pl'";}
            elseif (isset($_GET['sort']))
            {
                $by=$_GET['sort'];
                if($by==1)$sql="select * From game order by score asc";
                elseif ($by==2)$sql="select * From game order by score desc";
                elseif ($by==3)$sql="select * From game order by price asc";
                elseif ($by==4)$sql="select * From game order by price desc";
                elseif ($by==5)$sql="select * From game order by name asc";
                elseif ($by==6)$sql="select * From game order by name desc";
                elseif ($by==7)$sql="select * From game order by release_date desc";
                elseif ($by==8)$sql="select * From game order by release_date asc";
            }
            else $sql="select * From game";
            $db = config::getConnexion();
            $req = $db->prepare($sql);
            $req->execute();
            $row_count=0;
            
            $liste = $req->fetchAll();

            foreach($liste as $row){
                
                ?>
                    <div class="col-lg-6">
                         <div class="nk-product-cat-2">
                        <a class="nk-product-image" href="store-product.php?id_game=<?PHP echo $row['id_game']; ?>">
                         <?PHP image($row['id_game']);?>
                            </a>
                        <div class="nk-product-cont">
                        <h3 class="nk-product-title h5"><a href="store-product.php?id_game=<?PHP echo $row['id_game']; ?>"><?PHP echo $row['name']; ?></a></h3>
                        <div class="nk-gap-1"></div>

                        <span class="nk-product-rating">
                        <span class="nk-product-rating-front" style="width:<?PHP echo $row['score']*20; ?>% ;">
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
                    <div class="nk-gap-1"><?PHP $y=$row['id_plat']; if($y==1)echo '<span class="fa fa-desktop"></span> PC'; elseif ($y==2) echo '<span class="fab fa-playstation"></span> PS4'; else echo '<span class="fab fa-xbox"></span> Xbox';?></div>
                    <div class="nk-gap-1"><?PHP echo'<span class="fa fa-calendar"></span> '.$row['release_date'];''; ?></div>
                    <div class="nk-gap-1"><?PHP $c=$row['category']; if($c=="Sports")echo '<span class="fa fa-futbol"></span> '.$c.''; elseif ($c=="Racing") echo '<span class="fa fa-car"></span> '.$c.''; else echo '<span class="fa fa-crosshairs"></span> '.$c.'';?></div>
                    <div class="nk-gap-1"></div>
                <div class="nk-product-price"><?php 
                if( $row['solde'] >0)
                {?>
                    &nbsp;<strike style="color: red;"> <?php echo $row['price']; ?> $ </strike>&nbsp; <?php echo $row['solde']; ?> $ !!
                <?php
                }
                else {echo'&nbsp;'; echo $row['price']; echo'$';}
                ?> </div>
                    <div class="nk-gap-1"></div>
                    <a href="view/addToCart.php?id_game=<?PHP echo $row['id_game']?>" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                </div>
            </div>
        </div>
            

        
        <?PHP
            }
            
        ?>
                         
        
        
        
        
        
    </div>
    <!-- END: Products -->

            



    <!-- START: Most Popular -->
    <div class="nk-gap-3"></div>
    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Newest</span> Games</span></h3>
    <div class="nk-gap"></div>
    <div class="row vertical-gap">

        <?PHP
        $sql5="select * From game order by release_date  desc limit 3 ";
        $db2 = config::getConnexion();
        $req5 = $db2->prepare($sql5);
        $req5->execute();
        $row_count5=0;
        
        $liste5 = $req5->fetchAll();

        foreach($liste5 as $row){
            
            ?>
            <div class="col-lg-4 col-md-6">
            <div class="nk-product-cat">
                <a href="store-product.php?id_game=<?PHP echo $row['id_game']; ?>" class="nk-product-image" >
                    <?PHP image($row['id_game']);?>
                </a>
                <div class="nk-product-cont">
                    <h3 class="nk-product-title h5"><a href="store-product.php?id_game=<?PHP echo $row['id_game']; ?>""><?PHP echo $row['name']; ?></a></h3>
                    <div class="nk-gap-1"></div>


            <span class="nk-product-rating">
                
                <span class="nk-product-rating-front" style="width: <?PHP echo $row['score']*20; ?>%;">
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
                            <div class="nk-product-price">$ <?PHP echo $row['price']; ?></div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?> 
        
        
    </div>
    <!-- END: Most Popular -->
</div>

<div class="nk-gap-2"></div>


        
            <!-- START: Footer -->
<footer class="nk-footer">

    <div class="container">
        <div class="nk-gap-3"></div>
        <div class="row vertical-gap">
            <div class="col-md-6">
                <div class="nk-widget">
                    <h4 class="nk-widget-title"><span class="text-main-1">Contact</span> With Us</h4>
                    <div class="nk-widget-content">
                        <form action="https://html.nkdev.info/goodgames/php/ajax-contact-form.php" class="nk-form nk-form-ajax">
                            <div class="row vertical-gap sm-gap">
                                <div class="col-md-6">
                                    <input type="email" class="form-control required" name="email" placeholder="Email *">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control required" name="name" placeholder="Name *">
                                </div>
                            </div>
                            <div class="nk-gap"></div>
                            <textarea class="form-control required" name="message" rows="5" placeholder="Message *"></textarea>
                            <div class="nk-gap-1"></div>
                            <button class="nk-btn nk-btn-rounded nk-btn-color-white">
                                <span>Send</span>
                                <span class="icon"><i class="ion-paper-airplane"></i></span>
                            </button>
                            <div class="nk-form-response-success"></div>
                            <div class="nk-form-response-error"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="nk-widget">
                    <h4 class="nk-widget-title"><span class="text-main-1">Latest</span> Posts</h4>
                    <div class="nk-widget-content">
                        <div class="row vertical-gap sm-gap">
                            
                            <div class="col-lg-6">
                                <div class="nk-widget-post-2">
                                    <a href="blog-article.html" class="nk-post-image">
                                        <img src="assets/images/post-1-sm.jpg" alt="">
                                    </a>
                                    <div class="nk-post-title"><a href="blog-article.html">Smell magic in the air. Or maybe barbecue</a></div>
                                    <div class="nk-post-date">
                                        <span class="fa fa-calendar"></span> Sep 18, 2018
                                        <span class="fa fa-comments"></span> <a href="#">4</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="nk-widget-post-2">
                                    <a href="blog-article.html" class="nk-post-image">
                                        <img src="assets/images/post-2-sm.jpg" alt="">
                                    </a>
                                    <div class="nk-post-title"><a href="blog-article.html">Grab your sword and fight the Horde</a></div>
                                    <div class="nk-post-date">
                                        <span class="fa fa-calendar"></span> Sep 5, 2018
                                        <span class="fa fa-comments"></span> <a href="#">7</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="nk-widget">
                    <h4 class="nk-widget-title"><span class="text-main-1">In</span> Twitter</h4>
                    <div class="nk-widget-content">
                        <div class="nk-twitter-list" data-twitter-count="1"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-3"></div>
    </div>

    <div class="nk-copyright">
        <div class="container">
            <div class="nk-copyright-left">
                Copyright &copy; 2018 <a href="https://1.envato.market/nk-profile" target="_blank">nK</a>
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

    <img class="nk-page-background-top" src="assets/images/bg-top-4.png" alt="">
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
                          alert(data);  
                          if(data == 'No')  
                          {  
                            alert("Wrong Data"); 
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
                alert("Both Fields are required");  
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

<!-- Mirrored from html.nkdev.info/goodgames/store-catalog-alt.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 00:35:46 GMT -->
</html>
