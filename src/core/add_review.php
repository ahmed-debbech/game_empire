<?php
include("reviewC.php");
include("../entities/review.php");
include("../config.php");
function checkUserLogged($username){
    $sql="select username from user";
    $db = config::getConnexion();
    $res = $db->query($sql);
    foreach($res as $row){
        if($row["username"] == $username){
            return true;
        }
    }
    return false;
}
if((!empty($_POST["title"])) && (!empty($_POST["message"])) && (!empty($_POST["logged"]))){
    if(checkUserLogged($_POST["logged"])){
        $revc = new reviewC();
        $rev = new Review(0, $_POST["logged"], $_POST["review-rate"], $_POST["message"],"1999-8-13", $_POST["title"], $_POST["id_game"]);
        $revc->addReview($rev);
    }else{
        echo "You should login first";
    }
}else{
    echo "something went wrong";
}
?>