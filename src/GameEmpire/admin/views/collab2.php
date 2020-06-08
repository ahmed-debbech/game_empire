<?php  session_start(); 
 if (empty($_SESSION['id']))
 {
     echo "<script type='text/javascript'>";
echo "alert('Please Login First');
window.location.href='login.php';";
echo "</script>";
     
 }
?>

<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
<!-- Mirrored from themelooks.net/demo/dadmin/html/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Apr 2020 19:11:44 GMT -->

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GAME EMPIRE - Events Listing</title>
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
    <script src="../dist/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="../dist/sweetalert.css">


<body>

<?php
        if(isset($_GET['add2'])){
            $a=$_GET['add2'];
            if ($a==1){
                echo '<script type="text/javascript">swal("Events", "Event has been successfully added.", "success"); 
                
                </script>'; 
               
            }
            else echo'<script>swal("Events", "Something went wrong!", "error");</script>';
        }
        
        if(isset($_GET['ed2'])){
            $b=$_GET['ed2'];
            if ($b==1){
                echo '<script type="text/javascript">swal("Events", "Edits have been saved.", "success"); 
                
                </script>'; 
               
            }
            else echo'<script>swal("Events", "Something went wrong!", "error");</script>';
        }
       
        
        if(isset($_GET['Delete2'])){
            $d=$_GET['Delete2'];
            if ($d==1){
                echo'<script>swal({
                        title: "Are you sure?",
                        text: "You will not be able to recover this element",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: `#DD6B55`,
                        confirmButtonText: `Yes, delete this.`,
                        cancelButtonText: "Cancel",
                        closeOnConfirm: false,
                        closeOnCancel: false
                    },
                    function(isConfirm){
                    if (isConfirm){
                      swal("Delete", "Event has been removed permantly ", "success");
                    } else {
                      swal("Cancel", "Process has been aborted. :)", "error");
                    }
                    });</script>';
            }
            else echo'<script>swal("Oops...", "Something went wrong!", "error");</script>';
        }
    ?>

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
                            include "../core/config.php";
                            $ida=$_SESSION['id'];
                            $sql="select * From admin where id='$ida'";
                            $db = config::getConnexion();
                            $req = $db->prepare($sql);
                            $req->execute();
                            $row_count=0;
                            
                            $liste = $req->fetchAll();
                            ?>
                            <?php
                           
                            foreach($liste as $row){
                                ?>
                                <?PHP
                            }
                            ?>
                    
                    <li class="nav-item dropdown nav--user online">
                  
                        <a href="profile.php" class="nav-link" data-toggle="dropdown"> <img src="assets/img/avatars/<?PHP echo $row['photo'] ?>" alt="" class="rounded-circle"> <span><?PHP echo $row['id'] ?></span> <i class="fa fa-angle-down"></i> </a>
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
                            <a href="profile.php" class="nav-link" title="User Profile"> <i class="fa fa-user"></i> </a>
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


                            
                            <li>
                                <li class="">
                                <a href="#"> <i class="fa fa-shopping-cart"></i> <span>Ecommerce</span> </a>
                                    
                                    <ul>
                                    <li><a href="ecommerce.html">Dashboard</a></li>
                                    <li><a href="products.php">Products</a></li>
                                    <li><a href="products-add.php">Add Products</a></li>
                                    <li><a href="products-edit.php">Edit Products</a></li>
                                    <li><a href="orders.php">Orders</a></li>
                                    <li><a href="order-view.php">Order View</a></li>

                                       

                                    </ul>

                                </li>

                            </li>
                            <li class="">
                            <a href="#"> <i class="collab"></i> <span>Associates</span> </a>
                                <ul>

                                <li class=""><a href="collab.php">Organizors</a></li>
                                        <li><a href="collab-add.php">Add Organizor</a></li>
                                        <li><a href="collab-edit.php">Edit Organizor</a></li>
                                    
                                </ul>
                            </li>
                            <li class="active open">
                            <a href="#"> <i class="collab2"></i> <span>Events</span> </a>
                                <ul>

                                <li class="active"><a href="collab2.php">Events</a></li>
                                        <li><a href="collab2-add.php">Add Event</a></li>
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
                            <h2 class="page--title h5">Events</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Events</a></li>
                                <li class="breadcrumb-item active"><span>Events</span></li>
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
                            <h3 class="h3">Events <a href="#" class="btn btn-sm btn-outline-info">Manage Events</a></h3>
                            <p>Our associated gaming events</p>
                        </div>
                        <div class="actions">
                        <form   class="search flex-wrap flex-md-nowrap"> <input type="text" class="form-control"  id="myInput" onkeyup="quickFind2()" placeholder="type a Start Date.." title="search for events by Start Date" name="search1"   required> <button  class="btn btn-rounded"><i class="fa fa-search"></i></button> </form> <a name="add event" href="collab2-add.php" title="Add Event" class="addProduct btn btn-lg btn-rounded btn-success">➕</a></div>
                    </div>
                </div>



                <?PHP
                include "../entities/event.php";
                include "../core/eventc.php";
$eventc=new eventc();
$listeevent=$eventc->showEvents();




?>
<div class="panel">
 
<table class="table" style="background-color: white;" id="myTable1" >
                                        <thead>
                                            <tr>
                                                
                                                <th scope="col" style="color:Teal;">ID</th>
                                                <th scope="col" style="color:Teal;">Org ID</th>
                                                <th scope="col" style="color:Teal;">Image</th>
                                                <th scope="col" style="color:Teal;">Name</th>
                                                <th scope="col" style="color:Teal;">Category</th>
                                                <th scope="col" style="color:Teal;">Start Date</th>
                                                <th scope="col" style="color:Teal;">End Date</th>
                                                <th scope="col" style="color:Teal;">Location</th>
                                                
                                                <th scope="col" ></th>
                                                <th scope="col" style="color:Teal;">Status</th>
                                                <th scope="col" style="color:Teal;">ACTIONS</th>
                                                
                                               <th> <a name="order2"  href="collab2-ord.php" title="ascendant name order"class="btn btn-rounded btn-outline-warning">asc view</a>
                                                <a name="join" href="joiner.php"   title="join organizors with their events"class="btn btn-rounded btn-outline-primary">ORGAN|EVent</a>
                                                </th>
                                                
                                    
                                                
                                            </tr>
                                        </thead>
                                        <tbody >



                                        <?PHP
foreach($listeevent as $row){
    ?>
    <tr>
    
    <td style="color:DarkSlateGrey;"><?PHP echo $row['id_event']; ?> </td>
    <td style="color:DarkSlateGrey;"><?PHP echo $row['id_org']; ?> </td>
    <td><img src="../pics/<?PHP echo $row['pic'] ?>" width="100" height="40"> </td>
     <td style="color:DarkSlateGrey;"><?PHP echo $row['namee']; ?></td>
     <td style="color:DarkSlateGrey;"><?PHP echo $row['typee']; ?></td>
    <td style="color:DarkSlateGrey;"><?PHP echo $row['date_start']; ?></td>
    <td style="color:DarkSlateGrey;"><?PHP echo $row['date_end']; ?></td>
    <td style="color:DarkSlateGrey;"><?PHP echo $row['location']; ?> </td>
    
    <td><?php
    $today = date("Y-m-d");
    if ($row['date_start'] >  $today )
    {
        echo '<td> <span class="label label-success">ACTIVE</span> </td>';
    }
    else if($row['date_start'] <  $today)
    {
        echo '<td> <span class="label label-danger">EXPIRED</span> </td>';
    }
    else if($row['date_start'] ==  $today)
    {
        echo '<td> <span class="label label-primary">TODAY</span> </td>';
    }
    
    
    
   ?></td>
    
    <td><form method="POST" action="collab2-edit.php?edit2=<?PHP echo $row['id_event']; ?>" >
	<div class="col mb-3"> <button title="edit event" class="btn btn-rounded btn-outline-info"name="Edit2">✏️</button> </div>
	<input type="hidden" value="<?PHP echo $row['id_event']; ?>" name="id_event">
	</form>
	<form method="POST" action="../core/deleteEv.php">
	<div class="col mb-3"> <button title="delete event" class="btn btn-rounded btn-outline-danger"name="Delete2">❌</button> </div>
	<input type="hidden" value="<?PHP echo $row['id_event']; ?>" name="id_event">
	</form>
	
     

     

                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>

                        </table>
                    </div>
                </div>
                <script>
function quickFind2() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable1");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[5];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
} </script>
            </section>
            <footer class="main--footer main--footer-light">
                <p>Copyright <a href="#">GAME EMPIRE</a>. All Rights Reserved.</p>
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
</body>
<!-- Mirrored from themelooks.net/demo/dadmin/html/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Apr 2020 19:11:45 GMT -->

</html>