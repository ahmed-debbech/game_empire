<?php  session_start(); 
 if (empty($_SESSION['id']))
 {
     echo "<script type='text/javascript'>";
echo "alert('Please Login First');
window.location.href='../views/login.php';";
echo "</script>";
     
 }
?>
    <!DOCTYPE html>
    <html dir="ltr" lang="en" class="no-outlines">
    <!-- Mirrored from themelooks.net/demo/dadmin/html/products-edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Apr 2020 19:11:45 GMT -->

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>GAME EMPIRE - Edit Admin</title>
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link rel="icon" href="favicon.png" type="image/png">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CMontserrat:400,500">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
        <link rel="stylesheet" href="assets/css/perfect-scrollbar.min.css">
        <link rel="stylesheet" href="assets/css/morris.min.css">
        <link rel="stylesheet" href="assets/css/select2.min.css">
        <link rel="stylesheet" href="assets/css/jquery-jvectormap.min.css">
        <link rel="stylesheet" href="assets/css/horizontal-timeline.min.css">
        <link rel="stylesheet" href="assets/css/weather-icons.min.css">
        <link rel="stylesheet" href="assets/css/dropzone.min.css">
        <link rel="stylesheet" href="assets/css/ion.rangeSlider.min.css">
        <link rel="stylesheet" href="assets/css/ion.rangeSlider.skinFlat.min.css">
        <link rel="stylesheet" href="assets/css/datatables.min.css">
        <link rel="stylesheet" href="assets/css/fullcalendar.min.css">
        <link rel="stylesheet" href="assets/css/style.css"> </head>

    <body>
        <div class="wrapper">
            <header class="navbar navbar-fixed">
                <div class="navbar--header">
                    <a href="index.html" class="logo">  </a>
                    <a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar"> <i class="fa fa-bars"></i> </a>
                </div>
                <a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar"> <i class="fa fa-bars"></i> </a>
                <div class="navbar--search">
                    <form action="http://themelooks.net/demo/dadmin/html/search-results.html"> <input type="search" name="search" class="form-control" placeholder="Search Something..." required> <button class="btn-link"><i class="fa fa-search"></i></button> </form>
                </div>
                <div class="navbar--nav ml-auto">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link"> <i class="fa fa-bell"></i> <span class="badge text-white bg-blue">7</span> </a>
                        </li>
                        <li class="nav-item">
                            <a href="mailbox_inbox.html" class="nav-link"> <i class="fa fa-envelope"></i> <span class="badge text-white bg-blue">4</span> </a>
                        </li>
                        <li class="nav-item dropdown nav-language">
                            <a href="#" class="nav-link" data-toggle="dropdown"> <img src="assets/img/flags/us.png" alt=""> <span>English</span> <i class="fa fa-angle-down"></i> </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#"> <img src="assets/img/flags/de.png" alt=""> <span>German</span> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="assets/img/flags/fr.png" alt=""> <span>French</span> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="assets/img/flags/us.png" alt=""> <span>English</span> </a>
                                </li>
                            </ul>
                        </li>
                        <?PHP
include "../entities/admin.php";
include "../core/AdminC.php";

if (isset($_GET['adedit']))
{
    $id=$_GET['adedit'];
    $sql="select * from admin where id ='$id'";
    $db = config::getConnexion();
    $req = $db->prepare($sql);
    $req->execute();
    $liste = $req->fetchAll();
    foreach($liste as $row){
        $id= $row['id'];
        $mdp= $row['mdp'];
        $photo= $row['photo'];
        $contact= $row['contact'];
        $ocp= $row['ocp'];
        $dial= $row['dial'];
        $origin= $row['origin'];
        $bday= $row['bday'];
        $bio= $row['bio'];

        
    }
}
?>
                        <li class="nav-item dropdown nav--user online">
                            <a href="#" class="nav-link" data-toggle="dropdown"> <img src="assets/img/avatars/<?PHP echo $row['photo'] ?>" alt="" class="rounded-circle"> <span><?PHP echo $row['id'] ?></span> <i class="fa fa-angle-down"></i> </a>
                            <ul class="dropdown-menu">
                                <li><a href="profile.php"><i class="far fa-user"></i>Profile</a></li>
                                <li><a href="mailbox_inbox.html"><i class="far fa-envelope"></i>Inbox</a></li>
                                <li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="lock-screen.html"><i class="fa fa-lock"></i>Lock Screen</a></li>
                                <li><a  href="../core/logout.php"><i class="fa fa-power-off"></i>Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </header>
            <aside class="sidebar" data-trigger="scrollbar">
                <div class="sidebar--profile">
                    <div class="profile--img">
                        <a href="profile.php"> <img src="assets/img/avatars/<?PHP echo $row['photo'] ?>" alt="" class="rounded-circle"> </a>
                    </div>
                    <div class="profile--name"> <a href="profile.php" class="btn-link"><?PHP echo $row['id'] ?></a> </div>
                    <div class="profile--nav">
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="profile.html" class="nav-link" title="User Profile"> <i class="fa fa-user"></i> </a>
                            </li>
                            <li class="nav-item">
                                <a href="lock-screen.html" class="nav-link" title="Lock Screen"> <i class="fa fa-lock"></i> </a>
                            </li>
                            <li class="nav-item">
                                <a href="mailbox_inbox.html" class="nav-link" title="Messages"> <i class="fa fa-envelope"></i> </a>
                            </li>
                            <li class="nav-item">
                                <a  href="../core/logout.php" class="nav-link" title="Logout"> <i class="fa fa-sign-out-alt"></i> </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar--nav">
                    <ul>
                        <li>
                            <ul>
                                <li>
                                    <a href="index.html"> <i class="fa fa-home"></i> <span>Dashboard</span> </a>
                                </li>


                                <li class="">
                                    <a href="#"> <i class="fa fa-shopping-cart"></i> <span>Ecommerce</span> </a>
                                    <ul>
                                        <li><a href="ecommerce.html">Dashboard</a></li>
                                        <li><a href="products.php">Products</a></li>
                                        <li><a href="products-add.php">Add Products</a></li>
                                        <li class=""><a href="products-edit.php">Edit Products</a></li>
                                        <li><a href="orders.php">Orders</a></li>
                                        <li><a href="order-view.php">Order View</a></li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="#"> <i class="collab"></i> <span>Associates</span> </a>
                                    <ul>

                                        <li><a href="collab.php">Organizors</a></li>
                                        <li class=""><a href="collab-add.php">Add Organizor</a></li>
                                        <li class=""><a href="collab-edit.php">Edit Organizor</a></li>

                                    </ul>

                                </li>
                                <li class="">
                                    <a href="#"> <i class="collab2"></i> <span>Events</span> </a>
                                    <ul>

                                        <li><a href="collab2.php">Events</a></li>
                                        <li class=""><a href="collab2-add.php">Add Event</a></li>
                                        <li><a href="collab2-edit.php">Edit Event</a></li>
                                        <li><a href="statt.php">Statistics</a></li>

                                    </ul>
                                </li>
                                <li class="">
                            <a href="#"> <i class="collab"></i> <span>Platforms</span> </a>
                                <ul>

                                <li class="" ><a href="products0.php">ADD Platform</a></li>
                                    <li ><a href="products1.php">View Platform</a></li>
                                    <li ><a href="chart.php">Statistic</a></li>
                                    
                                </ul>
                            </li>
                            </ul>
                        </li>


                </div>
                <div class="sidebar--widgets">
                    <div class="widget">
                        <h3 class="h6 widget--title">Information Status</h3>
                        <div class="summary--widget">
                            <div class="summary--item">
                                <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#2bb3c0">5,6,7,9,15,5,6,7,9,11,7,9,11,7,9,9,3,2</p>
                                <p class="summary--title">Daily Traffic</p>
                                <p class="summary--stats">307.512</p>
                            </div>
                            <div class="summary--item">
                                <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#e16123">2,3,7,7,9,11,9,7,9,11,9,7,5,4,9,7,5,4</p>
                                <p class="summary--title">Average Usage</p>
                                <p class="summary--stats">2,371,527</p>
                            </div>
                            <div class="summary--item">
                                <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#cccccc">5,6,7,9,15,5,6,7,9,11,7,9,11,7,9,9,3,2</p>
                                <p class="summary--title">Disk Usage</p>
                                <p class="summary--stats">37.5%</p>
                            </div>
                            <div class="summary--item">
                                <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#009378">2,3,7,7,9,11,9,7,9,11,9,7,5,4,9,7,5,4</p>
                                <p class="summary--title">CPU Usage</p>
                                <p class="summary--stats">37.05-32</p>
                            </div>
                            <div class="summary--item">
                                <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#ff4040">5,6,7,9,15,5,6,7,9,11,7,9,11,7,9,9,3,2</p>
                                <p class="summary--title">Memory Usage</p>
                                <p class="summary--stats">37.05%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <main class="main--container">
                <section class="page--header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <h2 class="page--title h5" href="admin-edit.php" >Edit Admin</h2>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active"><span>Edit Admin</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <div class="summary--widget">
                                    <div class="summary--item">
                                        <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#009378">2,9,7,9,11,9,7,5,7,7,9,11</p>
                                        <p class="summary--title">This Month</p>
                                        <p class="summary--stats text-green">2,371,527</p>
                                    </div>
                                    <div class="summary--item">
                                        <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#e16123">2,3,7,7,9,11,9,7,9,11,9,7</p>
                                        <p class="summary--title">Last Month</p>
                                        <p class="summary--stats text-orange">2,527,371</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="main--content">
                    <div class="panel">
                        <div class="records--header">
                            <div class="title fa-shopping-bag">
                                <h3 class="h3">Admin <a href="#" class="btn btn-sm btn-outline-info">Edit Admin Infos</a></h3>
                                <p>Admin profile infos editing section</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="records--body">
                            <div class="title">
                                <h6 class="h6">Edit Infos</h6> </div>
                            <ul class="nav nav-tabs">
                                <li class="nav-item"> <a href="#tab01" data-toggle="tab" class="nav-link active">Details</a> </li>


                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab01">
                                    <form id="forma" name="forma" method="get" action="../core/editAdmin.php">
   
                                        <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Username: *</span>
                                            <div class="col-md-9"> <input type="text" name="id" value="<?PHP echo $_GET['adedit']; ?>" class="form-control" required> </div>
                                        </div>
                                        <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Password: *</span>
                                            <div class="col-md-9"> <input type="password" name="mdp" value="<?PHP echo $mdp; ?>" class="form-control" required><input type="checkbox" onclick="showpass()"> Show Password</div>
                                        </div>
                                        
                                        <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Photo: *</span>
                                            <div class="col-md-9"> <label class="custom-file"> <input  name="photo" type="file"  class="custom-file-input" required> <span class="custom-file-label"></span><?PHP echo $photo ?></label> </div>
                                        </div>
                                        <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Bio: *</span>
                                            <div class="col-md-9"> <input type="text" name="bio" value="<?PHP echo $bio ?>"class="form-control" required> </div>
                                        </div>
                                        <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Skills: *</span>
                                            <div class="col-md-9"> <input type="text" name="ocp" value="<?PHP echo $ocp ?>" class="form-control" required> </div>
                                        </div>
                                        <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Location: *</span>
                                            <div class="col-md-9"> <input type="text" name="origin" value="<?PHP echo $origin ?>"class="form-control" required> </div>
                                        </div>
                                        <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Birthday: *</span>
                                            <div class="col-md-9"> <input type="date" name="bday" value="<?PHP echo $bday ?>"class="form-control" required> </div>
                                        </div>
                                        <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Email: *</span>
                                            <div class="col-md-9"> <input type="email" name="contact" value="<?PHP echo $contact ?>"class="form-control" required> </div>
                                        </div>
                                        <div class="form-group row"> <span class="label-text col-md-3 col-form-label">Phone: *</span>
                                            <div class="col-md-9"> <input type="number" name="dial" value="<?PHP echo $dial ?>"class="form-control" required> </div>
                                        </div>
                                       
                                        <div class="row mt-3">
                                            <div class="col-md-9 offset-md-3"> <input type="submit" value="✏️" name="Update" class="btn btn-rounded btn-info"> </div>
                                        </div>
                                       <?php 
                                       ?>
                                    </form>
                                     

                                </div>


                            </div>
                        </div>
                    </div>
                </section>
                <footer class="main--footer main--footer-light">
                    <p>Copyright &copy;<a href="#">GAME EMPIRE</a>. All Rights Reserved.</p>
                </footer>
            </main>
        </div>
        <script type="text/javascript" src="assets/js/showpass.js"></script>
        <script type="text/javascript" src="assets/js/controller.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery-ui.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/perfect-scrollbar.min.js"></script>
        <script src="assets/js/jquery.sparkline.min.js"></script>
        <script src="assets/js/raphael.min.js"></script>
        <script src="assets/js/morris.min.js"></script>
        <script src="assets/js/select2.min.js"></script>
        <script src="assets/js/jquery-jvectormap.min.js"></script>
        <script src="assets/js/jquery-jvectormap-world-mill.min.js"></script>
        <script src="assets/js/horizontal-timeline.min.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="assets/js/jquery.steps.min.js"></script>
        <script src="assets/js/dropzone.min.js"></script>
        <script src="assets/js/ion.rangeSlider.min.js"></script>
        <script src="assets/js/datatables.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
    <!-- Mirrored from themelooks.net/demo/dadmin/html/products-edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Apr 2020 19:11:45 GMT -->

    </html>