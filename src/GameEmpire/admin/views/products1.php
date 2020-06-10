<html dir="ltr" lang="en" class="no-outlines"><!-- Mirrored from themelooks.net/demo/dadmin/html/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Apr 2020 19:11:44 GMT --><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard - DAdmin</title>
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
    <link rel="stylesheet" href="assets/css/style.css">
    <style type="text/css">
        .jqstooltip {
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: rgb(0, 0, 0) transparent;
            background-color: rgba(0, 0, 0, 0.6);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px arial, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            z-index: 10000;
        }

        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }
        #myInput {
 
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 20px;
  padding: 12px 20px 12px 40px;
  border: 5px solid #ddd;
  margin-bottom: 1px;
}


    </style>
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>

<body class="">
    <div class="wrapper">
        <header class="navbar navbar-fixed">
            <div class="navbar--header"> <a href="index.html" class="logo"> <img src="assets/img/logo.png" alt=""> </a>
                <a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar"> <i class="fa fa-bars"></i>
                </a> </div><a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar"> <i class="fa fa-bars"></i> </a>
            <div class="navbar--search">
                <form action="http://themelooks.net/demo/dadmin/html/search-results.html"> <input type="search" name="search" class="form-control" placeholder="Search Something..." required=""> <button class="btn-link"><i class="fa fa-search"></i></button> </form>
            </div>
            <div class="navbar--nav ml-auto">
                <ul class="nav">
                    <li class="nav-item"> <a href="#" class="nav-link"> <i class="fa fa-bell"></i> <span class="badge text-white bg-blue">7</span> </a> </li>
                    <li class="nav-item"> <a href="mailbox_inbox.html" class="nav-link"> <i class="fa fa-envelope"></i>
                            <span class="badge text-white bg-blue">4</span> </a> </li>
                    <li class="nav-item dropdown nav-language"> <a href="#" class="nav-link" data-toggle="dropdown">
                            <img src="assets/img/flags/us.png" alt=""> <span>English</span> <i class="fa fa-angle-down"></i> </a>
                        <ul class="dropdown-menu">
                            <li> <a href="#"> <img src="assets/img/flags/de.png" alt=""> <span>German</span> </a> </li>
                            <li> <a href="#"> <img src="assets/img/flags/fr.png" alt=""> <span>French</span> </a> </li>
                            <li> <a href="#"> <img src="assets/img/flags/us.png" alt=""> <span>English</span> </a> </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown nav--user online"> <a href="#" class="nav-link" data-toggle="dropdown">
                            <img src="assets/img/avatars/01_80x80.png" alt="" class="rounded-circle"> <span><?php echo $_SESSION['id'];?>
                                </span> <i class="fa fa-angle-down"></i> </a>
                        <ul class="dropdown-menu">
                            <li><a href="profile.html"><i class="far fa-user"></i>Profile</a></li>
                            <li><a href="mailbox_inbox.html"><i class="far fa-envelope"></i>Inbox</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a href="lock-screen.php"><i class="fa fa-lock"></i>Lock Screen</a></li>
                            <li><a href="../core/logout.php"><i class="fa fa-power-off"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </header>
        <aside class="sidebar ps ps--active-y" data-trigger="scrollbar">
            <div class="sidebar--profile">
                <div class="profile--img"> <a href="profile.html"> <img src="assets/img/avatars/01_80x80.png" alt="" class="rounded-circle"> </a> </div>
                <div class="profile--name"> <a href="profile.html" class="btn-link"><?php echo $_SESSION['id'];?></a> </div>
                <div class="profile--nav">
                    <ul class="nav">
                        <li class="nav-item"> <a href="profile.html" class="nav-link" title="User Profile"> <i class="fa fa-user"></i> </a> </li>
                        <li class="nav-item"> <a href="lock-screen.php" class="nav-link" title="Lock Screen"> <i class="fa fa-lock"></i> </a> </li>
                        <li class="nav-item"> <a href="mailbox_inbox.html" class="nav-link" title="Messages"> <i class="fa fa-envelope"></i> </a> </li>
                        <li class="nav-item"> <a href="../core/logout.php" class="nav-link" title="Logout"> <i class="fa fa-sign-out-alt"></i> </a> </li>
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
                                        <li><a href="collab2-add.php">Add Event</a></li>
                                        <li class=""><a href="collab2-edit.php">Edit Event</a></li>
                                        <li class=""><a href="statt.php">Statistics</a></li>

                                    </ul>
                                    </li>
                                    
                                    <li class="active open">
                            <a href="#"> <i class="collab"></i> <span>Platforms</span> </a>
                                <ul>

                                <li class="" ><a href="products0.php">ADD Platform</a></li>
                                    <li class="active"><a href="products1.php">View Platform</a></li>
                                    <li ><a href="chart.php">Statistic</a></li>
                                    
                                </ul>
                            </li>
                            </ul>
                            </li>
                    <li class="is-dropdown"> <a href="#">Layouts</a>
                        <ul>
                            <li class="is-dropdown"> <a href="#"> <i class="fa fa-th"></i> <span>Page Layouts</span>
                                </a>
                                <ul>
                                    <li><a href="blank.html">Blank Page</a></li>
                                    <li><a href="page-light.html">Page Light</a></li>
                                    <li><a href="sidebar-light.html">Sidebar Light</a></li>
                                </ul>
                            </li>
                            <li class="is-dropdown"> <a href="#"> <i class="fa fa-th-list"></i> <span>Footers</span>
                                </a>
                                <ul>
                                    <li><a href="footer-light.html">Footer Light</a></li>
                                    <li><a href="footer-dark.html">Footer Dark</a></li>
                                    <li><a href="footer-transparent.html">Footer Transparent</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="is-dropdown"> <a href="#">Components</a>
                        <ul>
                            <li class="is-dropdown"> <a href="#"> <i class="far fa-newspaper"></i> <span>UI
                                        Elements</span> </a>
                                <ul>
                                    <li><a href="buttons.html">Buttons</a></li>
                                    <li><a href="pagination.html">Pagination</a></li>
                                    <li><a href="progress-bars.html">Progress Bars</a></li>
                                    <li><a href="tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                    <li><a href="modals.html">Modals</a></li>
                                    <li><a href="ui-slider.html">UI Slider</a></li>
                                    <li><a href="sweet-alerts.html">Sweet Alerts</a></li>
                                    <li><a href="timeline.html">Timeline</a></li>
                                </ul>
                            </li>
                            <li class="is-dropdown"> <a href="#"> <i class="fab fa-wpforms"></i> <span>Form</span> </a>
                                <ul>
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="dropzone.html">Dropzone</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="is-dropdown"> <a href="#">Apps and Charts</a>
                        <ul>
                            <li class="is-dropdown"> <a href="#"> <i class="far fa-envelope"></i> <span>Mailbox</span>
                                </a>
                                <ul>
                                    <li><a href="mailbox_inbox.html">Inbox</a></li>
                                    <li><a href="mailbox_compose.html">Compose</a></li>
                                </ul>
                            </li>
                            <li> <a href="calendar.html"> <i class="far fa-calendar-alt"></i> <span>Calendar</span> </a>
                            </li>
                            <li> <a href="chat.html"> <i class="far fa-comments"></i> <span>Chat</span> </a> </li>
                            <li> <a href="contacts.html"> <i class="far fa-address-book"></i> <span>Contacts</span> </a>
                            </li>
                            <li> <a href="notes.html"> <i class="far fa-sticky-note"></i> <span>Notes</span> </a> </li>
                            <li> <a href="todo-list.html"> <i class="fa fa-tasks"></i> <span>Todo List</span> </a> </li>
                            <li> <a href="search-results.html"> <i class="fa fa-search"></i> <span>Search Results</span>
                                </a> </li>
                        </ul>
                    </li>
                    <li class="is-dropdown"> <a href="#">Extra</a>
                        <ul>
                            <li class="is-dropdown"> <a href="#"> <i class="fa fa-file"></i> <span>Extra Pages</span>
                                </a>
                                <ul>
                                    <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a href="invoice.html">Invoice</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="forgot-password.html">Forgot Password</a></li>
                                    <li><a href="lock-screen.html">Lock Screen</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                    <li><a href="500.html">500 Error</a></li>
                                    <li><a href="maintenance.html">Maintenance</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="sidebar--widgets">
                <div class="widget">
                    <h3 class="h6 widget--title">Information Summary</h3>
                    <div class="summary--widget">
                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#2bb3c0"><canvas width="5" height="38" style="display: inline-block; width: 5px; height: 38px; vertical-align: top;"></canvas></p>
                            <p class="summary--title">Daily Traffic</p>
                            <p class="summary--stats">307.512</p>
                        </div>
                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#e16123"><canvas width="5" height="38" style="display: inline-block; width: 5px; height: 38px; vertical-align: top;"></canvas></p>
                            <p class="summary--title">Average Usage</p>
                            <p class="summary--stats">2,371,527</p>
                        </div>
                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#cccccc"><canvas width="5" height="38" style="display: inline-block; width: 5px; height: 38px; vertical-align: top;"></canvas></p>
                            <p class="summary--title">Disk Usage</p>
                            <p class="summary--stats">37.5%</p>
                        </div>
                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#009378"><canvas width="5" height="38" style="display: inline-block; width: 5px; height: 38px; vertical-align: top;"></canvas></p>
                            <p class="summary--title">CPU Usage</p>
                            <p class="summary--stats">37.05-32</p>
                        </div>
                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#ff4040"><canvas width="5" height="38" style="display: inline-block; width: 5px; height: 38px; vertical-align: top;"></canvas></p>
                            <p class="summary--title">Memory Usage</p>
                            <p class="summary--stats">37.05%</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: -278px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 278px; height: 535px; right: 0px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 78px; height: 151px;"></div>
            </div>
        <div class="ps__rail-x" style="left: 0px; bottom: -278px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 278px; height: 399px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 59px; height: 84px;"></div></div></aside>
        <main class="main--container">
            <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2 class="page--title h5">Products</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="ecommerce.html">Ecommerce</a></li>
                                <li class="breadcrumb-item active"><span>Products</span></li>
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
                    <div class="records--list" >
                    <?PHP
                                        include "../core/platformC.php";
                                        $platform1C=new platformC();
                                        $listeplatforms=$platform1C->afficherplatform();
                                        //var_dump($listeproduits->fetchAll());
                                        
                                        ?>
                                        
                                        <input type="text"  class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search by ID..." title="Type in a name">
                            
                             
                        <table id="recordsListView">
                        
                            <thead>
                                <tr>
                                    <th >Platform ID</th>
                                    <th>Platform Name</th>
                                    <th class="not-sortable">Actions</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                            <?PHP

                           
                            $sql="select * From platform";
                            $db = config::getConnexion();
                            $req = $db->prepare($sql);
                            $req->execute();
                            $liste = $req->fetchAll();
                            ?>
                            <?php
                            function delete($id){
                            $id2=0;
                            $sql2="DELETE FROM `platform` WHERE `platform`.`id_plat` = '$id2'";
                            $db3 = config::getConnexion();
                            $req3 = $db->prepare($sql);
                            $req3->execute();
                            }
                            $id=0;
                             
                             ?>
                            
                            <?php
                            foreach($liste as $row){
                            ?>
                            <form method="GET">
                                 <tr>
                                
                                
                                
                                <td><?PHP echo $row['id_plat']; ?></td>
                                <td><?PHP echo $row['name']; ?></td>
                                <td>
                                    <a class="btn btn-outline-success" href="modifierplatform.php?edit=<?php echo $row['id_plat']; ?>  ">✏️</a>
                                    <a class="btn btn-outline-danger" href="supprimerplatform.php?delete=<?php echo $row['id_plat']; ?>  ">❌</a>   
                   
                                </td>
                            </tr>
                            </form>
                                
                            <?PHP
                            }
                            ?>
                               <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("recordsListView");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
 
                            
                        </td>
                            


                            
                            
                            </tbody>
                        </table>
                    </div>
                </div>
                        </div>
                        
                        
                                <!-- ============================================================== -->
                                <!-- end badges  -->
                                <!-- ============================================================== -->
                            </div>
                            <div class="row">
                                <!-- ============================================================== -->
                                <!-- tooltip and popperover  -->
                                <!-- ============================================================== -->
                               <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="section-block" id="tooltip">
                                        <h3 class="section-title">Tooltips & Popover</h3>
                                        <p>Use custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.</p>
                                    </div>
                                    <div class="card">
                                        <h5 class="card-header">Tooltips & Popovers</h5>
                                        <div class="card-body">
                                            <h4>Tooltip</h4>
                                            <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                Tooltip on top
                                            </button>
                                            <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                                                Tooltip on right
                                            </button>
                                            <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                                                Tooltip on bottom
                                            </button>
                                            <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
                                                Tooltip on left
                                            </button>
                                        </div>
                                        <div class="card-body border-top">
                                            <h4>Popovers</h4>
                                            <button type="button" class="btn btn-lg btn-primary" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
                                        </div>
                                        <div class="card-body border-top">
                                            <h4>Four Directions</h4>
                                            <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                Popover on top
                                            </button>
                                            <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                Popover on right
                                            </button>
                                            <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                Popover on bottom
                                            </button>
                                            <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                Popover on left
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- end tooltip and popperover  -->
                                <!-- ============================================================== -->
                            </div>
                            <div class="row">
                                <!-- ============================================================== -->
                                <!-- modal  -->
                                <!-- ============================================================== -->
                             <!--   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="section-block" id="modal">
                                        <h3 class="section-title">Modals</h3>
                                        <p>Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user notifications, or completely custom content.</p>
                                    </div>
                                    <div class="card">
                                        <h5 class="card-header">Examples</h5>
                                        <div class="card-body">
                                            <div class="">
                                                <h4>Live Demo</h4>
                                                <!-- Button trigger modal -->
                                            <!--    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                            Launch demo modal
                                                        </a>
                                                <!-- Modal -->
                                             <!--   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </a>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Woohoo, You are readng this text in a modal! Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user notifications, or completely custom content.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                                                <a href="#" class="btn btn-primary">Save changes</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- modal  -->
                                <!-- ============================================================== -->
                            </div>
                            <div class="row">
                                <!-- ============================================================== -->
                                <!-- paginations  -->
                                <!-- ============================================================== -->
                               <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="section-block" id="pagination">
                                        <h3 class="section-title">Paginations</h3>
                                        <p>Examples for showing pagination to indicate a series of related content exists across multiple pages.</p>
                                    </div>
                                    <div class="card">
                                        <h5 class="card-header">Pagination</h5>
                                        <div class="card-body">
                                            <h4>Default Pagination</h4>
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item active"><a class="page-link " href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="card-body border-top">
                                            <h4>Sizing</h4>
                                            <nav aria-label="...">
                                                <ul class="pagination pagination-lg">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" tabindex="-1">1</a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                </ul>
                                            </nav>
                                            <nav aria-label="...">
                                                <ul class="pagination pagination-sm">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" tabindex="-1">1</a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="card-body border-top">
                                            <h4>Working with icon</h4>
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Previous">
                                                            <span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span>      </a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span>
                                                           <span class="sr-only">Next</span></a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- pagination  -->
                                <!-- ============================================================== -->
                            </div>
                          <!--  <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <!-- ============================================================== -->
                                    <!-- images  -->
                                    <!-- ============================================================== -->
                                 <!--   <div class="card" id="images">
                                        <h5 class="card-header">Images</h5>
                                        <div class="card-body">
                                            <img src="http://via.placeholder.com/200x150" class="img-fluid mr-3" alt="Responsive image">
                                            <img src="http://via.placeholder.com/150x150" class="img-thumbnail mr-3" alt="Responsive image">
                                            <img src="http://via.placeholder.com/150x150" class="rounded-circle mr-3" alt="Responsive image">
                                        </div>
                                    </div>
                                    <!-- ============================================================== -->
                                    <!-- end images -->
                                    <!-- ============================================================== -->
                                </div>
                            </div>
            <footer class="main--footer main--footer-light">
                <p>Copyright © <a href="#">DAdmin</a>. All Rights Reserved.</p>
            </footer>
        </main>
    </div>
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
    <!-- Mirrored from themelooks.net/demo/dadmin/html/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Apr 2020 19:11:45 GMT -->



</body></html>