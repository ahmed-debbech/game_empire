<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
<!-- Mirrored from themelooks.net/demo/dadmin/html/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Apr 2020 19:12:06 GMT -->

<head>
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
    <link rel="stylesheet" href="assets/css/style.css"> </head>

<body>
    <div class="wrapper">
        <div class="m-account-w" data-bg-img="assets/img/account/wrapper-bg.jpg">
            <div class="m-account">
                <div class="row no-gutters flex-row-reverse">
                    <div class="col-md-6">
                        <div class="m-account--content-w" data-bg-img="assets/img/account/content-bg.jpg">
                            <div class="m-account--content">
                                <h2 class="h2">Have an account?</h2>
                                <a href="login.html" class="btn btn-rounded">Login Now</a> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="m-account--form-w">
                            <div class="m-account--form">
                                <div class="logo"> <img src="assets/img/logo.png" alt=""> </div>
                                <form method="post">
                                    <label class="m-account--title">Create your account</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend"> <i class="fas fa-user"></i> </div>
                                            <input type="text" name="username" placeholder="Username" class="form-control" autocomplete="off" required> </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend"> <i class="fas fa-envelope"></i> </div>
                                            <input type="email" name="email" placeholder="Email" class="form-control" autocomplete="off" required> </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend"> <i class="fas fa-key"></i> </div>
                                            <input type="password" name="password" placeholder="Password" class="form-control" autocomplete="off" required> </div>
                                    </div>
                                    <div class="form-group pt-3">
                                        <label class="form-check">
                                            <input type="checkbox" name="checkbox" value="1" class="form-check-input"> <span class="form-check-label">I agree all statements in terms of service</span> </label>
                                    </div>
                                    <div class="m-account--actions">
                                        <button type="submit" class="btn btn-block btn-rounded btn-info">Register</button>
                                    </div>
                                    <div class="m-account--footer">
                                        <p>&copy; War Declaration</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
    	include "../config.php";
    	if (isset($_POST['username']) and isset($_POST['password']) and isset($_POST['email']) and isset($_POST['checkbox']))
    	{
    		echo "ahla";
    		$user=$_POST['username'];
    		$pass=$_POST['password'];
    		$email=$_POST['email'];
    		$sql="insert into user (username,password,email,role) values ('$user','$pass','$email',1)";
		    $db = config::getConnexion();
		    $req = $db->prepare($sql);
		    if ($req->execute())
		    { 
		    	echo '<script type="text/javascript">swal("Welcome!", "Your Accont Has Been Registered!", "success");</script>'; 
		    }
		    else {
		    	echo'<script>swal("Oops...", "Something went wrong! Please check your inputs and try again", "error");</script>';
		    }
    	}
    	else echo'<script>swal("Oops...", "Something went wrong! Please connect and try again", "error");</script>';
    ?>
    <script src="dist/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="dist/sweetalert.css">
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
<!-- Mirrored from themelooks.net/demo/dadmin/html/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Apr 2020 19:12:06 GMT -->

</html>