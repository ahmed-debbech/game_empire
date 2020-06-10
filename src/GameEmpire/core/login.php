<?php
ob_start();
session_start();
include_once $_SERVER['DOCUMENT_ROOT']. '/GameEmpire/config.php';
/*$conf = new config();
$con = $conf->getConnexion();
if(isset($_GET["email"]) == false && isset($_GET["password"]) == false){
    echo "you should set username and pass correctly";
}else{
    //here we search fir the account 
    $sql = "select * from user;";
    $usr = $con->query($sql);
    $found = FALSE;
    foreach($usr as $row){
        if(($row["email"] == $_GET["email"]) && ($row["password"] == $_GET["password"])){
            $found = TRUE;
            break;
        }
    }
    if($found == FALSE){
        echo "this account doesnt exist";
    }else{
        echo "this account exist";
    }
}*/

if (isset($_POST['btn'])) {
    
    $username=$_POST['email'];
    $password=$_POST['password'];

    $sql1="select * from user where username='$username' and password='$password'";

    $result=mysqli_query($con,$sql1);
    
    if ($username=="admin" && $password=="admin") {
               $_SESSION['admin']=true;
               header("Location: ../coming-soon.html");exit(); 
   }

    elseif (mysqli_num_rows($result) > 0) {
                session_start();
                $_SESSION['email']=$username;
                header("Location: ../coming-soon.html");exit();
         }     
    else {

            echo "<div class='alert alert-danger'>
             <strong>Error !! </strong>the username or password is invalid.</div>";

    }
}

?>

