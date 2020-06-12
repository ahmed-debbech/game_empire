<?php
ob_start();
if(!isset($_SESSION)){
    session_start();
  }
include_once $_SERVER['DOCUMENT_ROOT'].'/GameEmpire/core/CartC.php';
//$cartContent=include("cartContent.php");
$cart1C=new cartC();
$username=$_SESSION["username"]; 
$list=$cart1C->showcarts($username); 
$list1=$cart1C->showcarts($username); 
$list2=$cart1C->showcarts($username); 
$list3=$cart1C->showcarts($username); 
$q='0';
$cq='0';
$t='0';
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

    <!-- Mirrored from html.nkdev.info/goodgames/store-checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 00:35:46 GMT -->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>GoodGames | Cart</title>

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



            <!--
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
                            <li  class="active" >
                                <a href="store.php">
                Store
                
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
        <li class="">
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
        
        </li>
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


                   
                    <li><a href="store.php">Store</a></li>


                    <li><span class="fa fa-angle-right"></span></li>

                    <li><span>Cart</span></li>
                    <li><span>Cart</span></li>

                </ul>
            </div>
            <div class="nk-gap-1"></div>
            <!-- END: Breadcrumbs -->




            <div class="container">
                <div class="nk-store nk-store-cart">
                    <div class="table-responsive">

                        <!-- START: Products in Cart -->
<?php
foreach($list1 as $row)
       
      {
          foreach($list as $row)
          {
           $q=$row['game_quantity']+$q;
           $t=($row['game_price']*$row['game_quantity'])+$t;     
           if($row['game_quantity'] > 0)   {                 
    ?>
              <table class="table nk-store-cart-products">
                   <form method="POST" action="view/updateCart.php">
                <tbody>
                   
                      
                        <tr>
                        <td class="nk-product-cart-thumb">

                                        <a href="store-product.html" class="nk-image-box-1 nk-post-image">
                                        <img src="<?php echo'data:image/jpeg;base64,'.base64_encode($row['game_img'] ).'" alt="'.$row['game_name'].'" width="115"'?>">
                                        </a>
                                    </td>
                            <td class="nk-product-cart-title">
                                
                                <h5 class="h6">Product:</h5>
                                <div class="nk-gap-1"></div>

                                <h2 class="nk-post-title h4">
                                    <a href="store-product.html" ><?PHP echo $row['game_name'];  ?></a>
                                    <input type="hidden" name="game_name[]" id="game_name[]" value="<?PHP echo $row['game_name'];  ?>">
                                </h2>
                            </td>
                            <td class="nk-product-cart-price">
                                <h5 class="h6">Price:</h5>
                                <div class="nk-gap-1"></div>

                                <strong><?PHP echo $row['game_price']; ?> $</strong>
                            </td>
                            <td class="nk-product-cart-quantity">
                                <h5 class="h6">Quantity:</h5>
                                <div class="nk-gap-1"></div>
                                <div class="nk-form">
                                <input type="number" name="quantity[]" id="quantity[]" class="form-control" value="<?PHP echo $row['game_quantity']; ?>" min="0" max="21">
                                </div>
                            </td>

                            <td class="nk-product-cart-total">

                                <h5 class="h6">Total:</h5>
                                <div class="nk-gap-1"></div>

                                <strong><?PHP echo $row['game_price']*$row['game_quantity']; ?> $</strong>
                            </td>
                                <?php } ?>
                             </tr>
                             <tr>
                             <td colspan="5"><a class="nk-post-title h4" href="view/updateCart.php?act=delete&id=<?php echo $row['game_name'] ?>"><span class="fas fa-trash-alt float-right"></span></a> </td>
                             <!--<td colspan="6"><button type="submit" class="nk-btn nk-btn-rounded nk-btn-color-main-1 float-right" name="remove" id="remove">
                                Remove
                             </button></td>-->
                             
                             </tr>

                  </tbody>

            </table>
            <?php 
            
          } 
      }
          ?>
                        <!-- END: Products in Cart -->

        </div>
        <div class="nk-gap-1"></div>
        <input type="submit" class="nk-btn nk-btn-rounded nk-btn-color-white float-right" value="Update Cart" name="update_cart" id="update_cart">
       
        </form>
        </div>
                    <!--<input type="submit" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block" value="Update Cart" name="update_cart" id="update_cart">-->

                    <div class="clearfix"></div>
                    <div class="nk-gap-2"></div>
                    <div class="row vertical-gap">
                        <div class="col-md-6">

                            <!-- START: Calculate Shipping -->
                            <h3 class="nk-title h4">Calculate Shipping</h3>
                            <form action="#" class="nk-form">
                                <label for="country-sel">Country <span class="text-main-1">*</span>:</label>
                                <select name="country" class="form-control required" id="country-sel">
                        <option value="">Select a country...</option>
                    </select>

                                <div class="nk-gap-1"></div>
                                <div class="row vertical-gap">
                                    <div class="col-sm-6">
                                        <label for="state">State / Country <span class="text-main-1">*</span>:</label>
                                        <input type="text" class="form-control required" name="state" id="state">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="zip">Postcode / ZIP <span class="text-main-1">*</span>:</label>
                                        <input type="tel" class="form-control required" name="zip" id="zip">
                                    </div>
                                </div>

                                <div class="nk-gap-1"></div>
                                <a class="nk-btn nk-btn-rounded nk-btn-color-white float-right" href="#">Update Totals</a>
                            </form>
                            <!-- END: Calculate Shipping -->

                        </div>
                        <div class="col-md-6">
                            <!-- START: Cart Totals -->
                            <h3 class="nk-title h4">Cart Totals</h3>
                            <table class="nk-table nk-table-sm">
                                <tbody>
                                    <tr class="nk-store-cart-totals-subtotal">
                                        <td>
                                            Subtotal
                                        </td>
                                        <td>
                                        <?PHP echo $t; ?> $
                                        </td>
                                    </tr>
                                    <tr class="nk-store-cart-totals-shipping">
                                        <td>
                                            Shipping
                                        </td>
                                        <td>
                                            Free Shipping
                                        </td>
                                    </tr>
                                    <tr class="nk-store-cart-totals-total">
                                        <td>
                                            Total
                                        </td>
                                        <td>
                                        <?PHP echo $t; ?> $
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- END: Cart Totals -->
                        </div>
                    </div>

                    <div class="nk-gap-2"></div>
                    <a class="nk-btn nk-btn-rounded nk-btn-color-main-1 float-right" href="store-checkout.php">Proceed to Checkout</a>
                    <div class="clearfix"></div>
                </div>
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
        <div class="nk-modal modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                        <h4 class="mb-0"><span class="text-main-1">Sign</span> In</h4>
                        <a href="account.php">My account</a><br>
                        <div class="nk-gap-1"></div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Login Modal -->




        <!-- START: Scripts -->

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

    <!-- Mirrored from html.nkdev.info/goodgames/store-checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 00:35:46 GMT -->

    </html>