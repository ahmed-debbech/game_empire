<?php
include("likeC.php");
include_once("../entities/like.php");
function checkIfLogged(){
    if(isset($_GET["userLogged"]) && !empty($_GET["userLogged"])){
        $sql1="select * from user where username='".$_GET["userLogged"]."'";
         $con = mysqli_connect("127.0.0.1", "root", "", "game_empire");
         $result = mysqli_query($con, $sql1);
         if(mysqli_num_rows($result) > 0){
            return true;
         }
    }
    return false;
}
if(checkIfLogged() == true){
    $likeC = new likeC();
    $like = new Like(0,$_GET['id_rev'],$_GET["username"],$_GET["reaction"]);
    $likeC->addLike($like);
    header("Location: ". $_SERVER['HTTP_REFERER']);
}else{
    echo "not logged";
}
?> 