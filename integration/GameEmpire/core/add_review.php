<?php
include("reviewC.php");
include("../entities/review.php");
include("../config.php");
function checkUserLogged($username){
        $sql1="select * from user where username='".$username."'";
         $con = mysqli_connect("127.0.0.1", "root", "", "game_empire");
         $result = mysqli_query($con, $sql1);
         if(mysqli_num_rows($result) > 0){
            return true;
         }
    return false;
}
if((!empty($_POST["title"])) && (!empty($_POST["message"])) && (!empty($_POST["logged"]))){
    if(checkUserLogged($_POST["logged"])){
        $revc = new reviewC();
        $rev = new Review(0, $_POST["logged"], $_POST["review-rate"], $_POST["message"],"1999-8-13", $_POST["title"], $_POST["id_game"]);
        $revc->addReview($rev);
        header("Location: ". $_SERVER['HTTP_REFERER']);
    }else{
        echo "You should login first";
    }
}else{
    echo "something went wrong";
}
?>