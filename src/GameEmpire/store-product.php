<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
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

<!-- Mirrored from html.nkdev.info/goodgames/store-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 00:35:26 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>GoodGames</title>
    <style type="text/css">
        #popup
        {
            position: fixed;
            top: 40%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 500px;
            padding: 50px;
            visibility: visible;
            opacity: 1;
            transition: 0.5s;
            z-index: 1;
        }
        #popup.active
        {
            visibility: hidden;
            opacity: 0;
            transition: 0.5s;
            z-index: 1;
        }
    </style>
    <script type="text/javascript">
        function toggle(){
            var blur = document.getElementById('blur');
            blur.classList.toggle('active');
            var popup = document.getElementById('popup');
            popup.classList.toggle('active');
        }
    </script>

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
    <script src="dist/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="dist/sweetalert.css">

    <!-- FontAwesome -->
    <script defer src="assets/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="assets/vendor/fontawesome-free/js/v4-shims.js"></script>

    <!-- IonIcons -->
    <link rel="stylesheet" href="assets/vendor/ionicons/css/ionicons.min.css">
    <style type="text/css">
        .fa-heart-o {
        color: red;
        cursor: pointer;
        }
        .fa-heart {
        color: red;
        cursor: pointer;}
    </style>

    <!-- Flickity -->
    <link rel="stylesheet" href="assets/vendor/flickity/dist/flickity.min.css">
    
    <!-- react button css-->
    <link rel="stylesheet" href="assets/css/react-button.css">

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

    <!-- Check fielsd -->
    <script src="assets/js/check_review.js" type="text/javascript"></script>

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

                            <li>
                                <a href="index.php">
                Home
                
            </a>
                            </li>
                            <li class="active">
                                <a href="store.php">
                Store
                
            </a>
                            <li>
                                <a href="contact.html">
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
        <?PHP
                            //include "config.php";
                            $id55=$_GET['id_game'];
                            $sql="select * From game where id_game='$id55'";
                            $db = config::getConnexion();
                            $req = $db->prepare($sql);
                            $req->execute();
                            $row_count=0;
                            
                            $liste = $req->fetchAll();
                             function image($id){
                                $query = "SELECT name FROM image where id_game='$id'";  
                            $db2 = config::getConnexion();
                            $req2 = $db2->prepare($query);
                            $req2->execute();
                            $liste2 = $req2->fetchAll();
                            foreach($liste2 as $row){
                                echo'<img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" />';
                            }
                            }

                            foreach($liste as $row){
                                ?>
                                <?PHP
                            }
                            ?>
        
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs">
        
        
        <li><a href="index.php">Home</a></li>
        
        
        <li><span class="fa fa-angle-right"></span></li>
        
        <li><a href="store.php">Store</a></li>
        
        
        <li><span class="fa fa-angle-right"></span></li>
        
        <li><?PHP echo $row['name']; ?></li>
        
        
        <li><span class="fa fa-angle-right"></span></li>
        
        <li><span><?PHP echo $row['name']; ?> </span></li>
        
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->

        

        
<div class="container">
    <div class="row vertical-gap">
        <div class="col-lg-8">
            <div class="nk-store-product">
                <div class="row vertical-gap">
                    <div class="col-md-6">
                        <!-- START: Product Photos -->
                        <div class="nk-popup-gallery">
                            <div class="nk-gallery-item-box">
                                <a href="#" class="nk-gallery-item" data-size="1200x554">
                                    <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                    <?PHP image($row['id_game']);?>
                                </a>
                            </div>
                        </div>
                        <!-- END: Product Photos -->
                    </div>
                    <div class="col-md-6">
                        <form method="get" >
                    <h2 class="nk-product-title h3"><?PHP echo $row['name']; ?> <a onclick="toggle();" href="?id_game=<?PHP echo $row['id_game']; ?>&favourite=<?PHP echo $row['id_game']; ?>" id = heart>
                   
                        <i class="fa fa-heart-o" aria-hidden="true" ></i> </a></h2>

                         <?PHP
                         
                    if (isset($_GET['favourite']))
                    {
                       if (isset($_SESSION['username']))
                    
                        {
                            $username=$_SESSION['username'];
                        $g= $_GET['favourite'];
                            $sql="SELECT * from favourite where username='$username' and id_game='$g'";
                            $db = config::getConnexion();
                            $req=$db->prepare($sql);
                            $id_game=$_GET['favourite'];
                            $p= NULL;
                            $p2= NULL;
                            if ($req->execute())
                            {   
                                $liste2 = $req->fetchAll();
                                foreach($liste2 as $row2)
                                {
                                    $p= $row2['id_game'];
                                    $p2= $row2['username'];
                                }
                            }
                            
                                if ($p==$g && $p2==$username)
                                {
                                $sql="DELETE from favourite where username=:username and id_game=:id_game";
                                $db = config::getConnexion();
                                $req=$db->prepare($sql);
                                $id_game=$_GET['favourite'];
                                $req->bindValue(':username',$username);
                                $req->bindValue(':id_game',$id_game);
                                if($req->execute())
                                {   
                                    echo '<script type="text/javascript">swal("Removed!", "Your Game has been Removed from your Favourite!", "warning");</script>';
                                }

                                }

                            else{
                                        $sql="insert into favourite (username,id_game) values (:username,:id_game)";
                                        $db = config::getConnexion();
                                        $req=$db->prepare($sql);
                                        $id_game=$_GET['favourite'];
                                        $req->bindValue(':username',$username);
                                        $req->bindValue(':id_game',$id_game);
                                        if($req->execute())
                                        {
                                             echo '<script type="text/javascript">swal("Added!", "Your Game has been Added to your Favourite!", "success");</script>';
                                        }

                                }
                            }
                            else echo'<script>swal("Oops...", "Something went wrong! Please connect and try again", "error");</script>';
                        }
                    ?>
                    <script type="text/javascript">
                        $(document).ready(function(){
                      $("#heart").click(function(){
                        if($("#heart").hasClass("liked")){
                          $("#heart").html('<i class="fa fa-heart-o" aria-hidden="true"></i>');
                          $("#heart").removeClass("liked");
                        }else{
                          $("#heart").html('<i class="fa fa-heart" aria-hidden="true"></i>');
                          $("#heart").addClass("liked");
                        }
                      });
                    });
                    </script>
                    </form>

                        <span class="nk-product-rating">
                        <span class="nk-product-rating-front" style="width:<?PHP echo $score2=$row['score']*20; ?>% ;">
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



                        <div class="nk-product-description">Patform :    <?PHP $y=$row['id_plat']; if($y==1)echo "PC"; elseif ($y==2) echo "PS4"; else echo "Xbox";?></div>
                        <div class="nk-product-description">Release Date :    <?PHP echo $row['release_date']; ?></div>
                        <div class="nk-product-description">Category :    <?PHP echo $row['category']; ?></div>

                        <!-- START: Add to Cart -->
                        <div class="nk-gap-2"></div>
                        <form action="#" class="nk-product-addtocart">
                            <div class="nk-product-price"><?php 
                            if( $row['solde'] >0)
                            {?>
                                &nbsp;<strike style="color: red;"> $<?php echo $row['price']; ?>.00  </strike>&nbsp; $<?php echo $row['solde']; ?>.00  !!
                            <?php
                            }
                            else {echo'&nbsp;'; echo $row['price']; echo'.00 $';}
                            ?></div>
                            <div class="nk-gap-1"></div>
                            <div class="input-group">
                                <input type="number" class="form-control" value="1" min="1" max="21">
                                <a href="view/addToCart.php?id_game=<?PHP echo $row['id_game']?>" class="nk-btn nk-btn-rounded nk-btn-color-main-1">Add to Cart</a>
                            </div>
                        </form>
                        <div class="nk-gap-3"></div>
                        <!-- END: Add to Cart -->

                    </div>
                </div>


                <!-- START: Share -->
                <div class="nk-gap-2"></div>
                <div class="nk-post-share">
                    <span class="h5">Share Product:</span>
                    <ul class="nk-social-links-2">
                        <li><span class="nk-social-facebook" title="Share page on Facebook" data-share="facebook"><span class="fab fa-facebook"></span></span></li>
                        <li><span class="nk-social-twitter" title="Share page on Twitter" data-share="twitter"><span class="fab fa-twitter"></span></span></li>
                        <li><span class="nk-social-pinterest" title="Share page on Pinterest" data-share="pinterest"><span class="fab fa-pinterest-p"></span></span></li>

                        <!-- Additional Share Buttons
                            <li><span class="nk-social-linkedin" title="Share page on LinkedIn" data-share="linkedin"><span class="fab fa-linkedin"></span></span></li>
                            <li><span class="nk-social-vk" title="Share page on VK" data-share="vk"><span class="fab fa-vk"></span></span></li>
                        -->
                    </ul>
                </div>
                <!-- END: Share -->

                <div class="nk-gap-2"></div>
                <!-- START: Tabs -->
                <div class="nk-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#tab-description" role="tab" data-toggle="tab">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tab-reviews" role="tab" data-toggle="tab">Reviews (<?php include("core/count-review.php");?>)</a>
                        </li>
                    </ul>

                    <div class="tab-content">

                        <!-- START: Tab Description -->
                        <div role="tabpanel" class="tab-pane fade show active" id="tab-description">
                            <div class="nk-gap"></div>
                            <iframe width="730" height="400" src="<?PHP echo $row['trailer']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="nk-gap"></div>
                            <strong class="text-white">Release Date: <?PHP echo $row['release_date']; ?></strong>
                            

                            <div class="nk-product-info-row row vertical-gap">
                                <div class="col-md-5">
                                    <div class="nk-product-pegi">
                                        <div class="nk-gap"></div>
                                        <img src="assets/images/pegi-icon.jpg" alt="">
                                        <div class="nk-product-pegi-cont">
                                            <strong class="text-white">Pegi Rating:</strong>
                                            <div class="nk-gap"></div>
                                            Suitable for people aged 12 and over.
                                        </div>
                                        <div class="nk-gap"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="nk-gap"></div>
                                    <strong class="text-white">Genre:</strong>
                                    <div class="nk-gap"></div><?PHP echo $row['category']; ?><div class="nk-gap"></div>
                                </div>
                                <div class="col-md-4">
                                    <div class="nk-gap"></div>
                                    <strong class="text-white">Customer Rating:</strong>
                                    <div class="nk-gap"></div>
                                    
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


                                    <div class="nk-gap"></div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Tab Description -->

                        <!-- START: Tab Reviews -->
                        <div role="tabpanel" class="tab-pane fade" id="tab-reviews">
                            <div class="nk-gap-2"></div>
                            <!-- START: Reply -->
                            <h3 class="h4">Add a Review</h3>
                            <div class="nk-reply">
                                <form action="core/add_review.php" method="post" class="nk-form" onsubmit="return check();">
                                <input type="hidden" name="id_game" value="<?php echo $_GET["id_game"]; ?>">
                                <input type="hidden" name="logged" value="<?php
                                if(isset($_SESSION['username'])){
                                    if(!empty($_SESSION['username'])){
                                        echo $_SESSION['username'];
                                    }else{
                                        echo "..";
                                    }
                                }else{
                                echo "..";
                                }
                                ?>">
                                    <div class="row vertical-gap sm-gap">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control required" id="title" name="title" placeholder="Title *">
                                        </div>
                                    </div>
                                    <div class="nk-gap-1"></div>
                                    <textarea class="form-control required" id="text" name="message" rows="5" placeholder="Your Review *" aria-required="true"></textarea>
                                    <div class="nk-gap-1"></div>
                                    <div class="nk-rating">
                                        <input type="radio" id="review-rate-5" name="review-rate" value="5">
                                        <label for="review-rate-5">
                                            <span><i class="far fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </label>

                                        <input type="radio" id="review-rate-4" name="review-rate" value="4">
                                        <label for="review-rate-4">
                                            <span><i class="far fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </label>

                                        <input type="radio" id="review-rate-3" name="review-rate" value="3">
                                        <label for="review-rate-3">
                                            <span><i class="far fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </label>

                                        <input type="radio" id="review-rate-2" name="review-rate" value="2">
                                        <label for="review-rate-2">
                                            <span><i class="far fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </label>

                                        <input type="radio" id="review-rate-1" name="review-rate" value="1">
                                        <label for="review-rate-1">
                                            <span><i class="far fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </label>
                                    </div>
                                    <input type="submit" onclick="check();" id="submit" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 float-right" value="Submit">
                                    <a style="visibility: hidden;  color: white;" id="war-log-review">You should login first!</a>
                                </form>
                            </div>
                            <!-- END: Reply -->
                            <div class="clearfix"></div>
                            <div class="nk-gap-2"></div>
                            <form action="store-product.php" method="get">
                                <input type="hidden" name="id_game" value="<?php echo $_GET["id_game"];?>">
                                <input type="hidden" name="sort" value="1">
                                <select name="list">
                                    <option selected value="--">---</option>
                                    <option value="date">New</option>
                                </select>
                                <input type="submit" value="Sort">
                            </form>
                            <div class="nk-comments"> 
                                <!--Loading reviews -->
                            <?php include("core/getreviews.php"); ?>
                        <!-- END: Tab Reviews -->

                    </div>
                </div>
                <!-- END: Tabs -->
            </div>

            <!-- START: Related Products -->
            <div class="nk-gap-3"></div>
            <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Related</span> Products</span></h3>
            <div class="nk-gap"></div>
            <div class="row vertical-gap">
                <?PHP   $cat=$row['category']; 
                        $name=$row['name']; 

                            $sql="SELECT * from game where category='$cat' and name!='$name'";
                            $req = $db->prepare($sql);
                            $req->execute();
                            $liste = $req->fetchAll();
                            if ($req->execute())
                            {   
                                
                                foreach($liste as $row)
                                { ?>
                                    <div class="col-md-6">
                                        <div class="nk-product-cat">
                                            <a class="nk-product-image" href="store-product.php?id_game=<?PHP echo $row['id_game']; ?>">
                                                <?PHP image($row['id_game']);?>
                                            </a>
                                            <div class="nk-product-cont">
                                                <h3 class="nk-product-title h5"><a href="store-product.php?id_game=<?PHP echo $row['id_game']; ?>"><?PHP echo $row['name']; ?></a></h3>
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
                            }
                            ?>             
            </div>
            <!-- END: Related Products -->
        </div>

<!-- START: Sidebar


                Additional Classes:
                    .nk-sidebar-left
                    .nk-sidebar-right
                    .nk-sidebar-sticky
            -->
<div class="col-lg-4">
<aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span><span class="text-main-1">Category</span> Menu</span></h4>
    <div class="nk-widget-content">
        <ul class="nk-widget-categories">
        <?php $sql3="SELECT DISTINCT category FROM game";
        $req3 = $db->prepare($sql3);
        $req3->execute();
        $liste3 = $req3->fetchAll();
        if ($req3->execute())
        {   
            
            foreach($liste3 as $row3)
            {   ?>
                <li><a href="store.php?cat=<?php echo $row3['category'] ;?>"><?php echo $row3['category']; ?></a></li>
                <?php
            }
        } 
        ?>
            </ul>
    </div>
</div>


<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span><span class="text-main-1">Most</span> Popular</span></h4>


<?PHP

    $sql3="select * From game order by score  desc limit 3";
    $req3 = $db->prepare($sql3);
    $req3->execute();
    $liste3 = $req3->fetchAll();
    if ($req3->execute())
    {   
        
        foreach($liste3 as $row3)
        { ?>
            <div class="nk-widget-content">
                <div class="nk-widget-post">
                    <a href="store-product.php?id_game=<?PHP echo $row3['id_game']; ?>" class="nk-post-image">
                        <?PHP image($row3['id_game']);?>
                    </a>
                    <h3 class="nk-post-title"><a href="store-product.php?id_game=<?PHP echo $row3['id_game']; ?>"><?PHP echo $row3['name']; ?></a></h3>
                    
            <span class="nk-product-rating">
                <span class="nk-product-rating-front" style="width:<?PHP echo $row3['score']*20; ?>%;">
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

                    <div class="nk-product-price">$ <?PHP echo $row3['price']; ?></div>
                </div>
    </div>
          <?php  
        }
    }
    ?>       
    


</div>


            </aside>
            
        </div>
    
</div>
<div class="nk-gap-2"></div>
<!-- END: Sidebar -->


        
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

<!-- Mirrored from html.nkdev.info/goodgames/store-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 00:35:29 GMT -->
</html>
