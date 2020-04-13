<?php
include("../config.php");
$conf = new config();
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
}
?>