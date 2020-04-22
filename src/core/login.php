
<?php
ob_start();
session_start();
include("../config.php");
if (isset($_POST["username"])) {
    
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql1="select * from user where username='".$_POST["username"]."' and password='".$_POST["password"]."'";
    $con = mysqli_connect("127.0.0.1", "root", "", "game_empire");
    $result = mysqli_query($con, $sql1);
    if ($_POST["username"]=="admin" && $_POST["password"]=="admin") {
               $_SESSION['admin']=true;
               header("Location: ../coming-soon.html");exit(); 
   }

    elseif (mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $_POST['username'];  
        echo 'Yes';  
         }     
    else {

        echo 'No';  

    }
}

?>