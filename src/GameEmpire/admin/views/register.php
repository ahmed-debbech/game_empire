<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
<!-- Mirrored from themelooks.net/demo/dadmin/html/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Apr 2020 19:12:06 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GAME EMPIRE Dashboard - Register</title>
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
                                <a href="login.php" class="btn btn-rounded">Login Now</a> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="m-account--form-w">
                            <div class="m-account--form">
                                <div class="logo"> <img src="assets/img/logo.png" alt=""> </div>
                                <form method="post" action="newAdmin.php" id="formr" name="formr" onsubmit="checkCap3();">
                                    <label class="m-account--title">Create your account</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend"> <i class="fas fa-user"></i> </div>
                                            <input type="text" name="id" id="id" placeholder="Username" class="form-control" autocomplete="off" required> </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend"> <i class="fas fa-key"></i> </div>
                                            <input type="password" name="mdp" id="mdp" placeholder="Password" class="form-control" autocomplete="off" required> </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend"> <i class="fas fa-image"></i> </div>
                                            <input type="file" name="photo"class="form-control" autocomplete="off" required> </div>
                                    </div>
                                   
                                    <input type="checkbox" onclick="showpass2()"> Show Password
                                    <div class="m-account--actions">
                                        <button type="submit" name="addmin" class="btn btn-block btn-rounded btn-info">Register</button>
                                    </div>
                                    <div class="m-account--footer">
                                        <p>&copy; GAME EMPIRE. All rights reserved.</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/showpass.js"></script>
    <script type="text/javascript" src="assets/js/controller.js"></script>
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