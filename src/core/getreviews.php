<?php
include_once("core/reviewC.php");
include_once("entities/review.php");
include("config.php");
$revC = new reviewC();
function convertStars($x){
    switch($x){
        case 1: return 20;
        break;
        case 2: return 40;
        break;
        case 3: return 60;
        break;
        case 4: return 80;
        break;
        case 5: return 100;
        break;
    }
}
function checkIfSet(){
    if(isset($_SESSION["username"])){
        if(!empty($_SESSION["username"])){
            return $_SESSION["username"];
        }
    }
    return "..";
}
function setClicked($id_rev, $username, $type){
    $con = mysqli_connect("127.0.0.1", "root", "", "game_empire");
    $sql1="select * from react where id_rev='".$id_rev."' and type='".$type."' and username='".$username."'";
    if($result = mysqli_query($con, $sql1)){
        if(mysqli_num_rows($result) > 0){
            echo  "disabled ";
        }
    }
}
function getReact($id_rev, $type){
    $con = mysqli_connect("127.0.0.1", "root", "", "game_empire");
    $sql1="select * from react where id_rev='".$id_rev."' and type='".$type."'";
    if($result = mysqli_query($con, $sql1)){
    $num = mysqli_num_rows($result);
    return $num;
    }
    return "none";
}
if(isset($_GET["sort"])){
    $list = $revC->getReviewsSorted($_GET["id_game"],$_GET["list"]);
    
}else{
    $list = $revC->getReviews($_GET["id_game"]);
}
$j=0;
    for($i=sizeof($list)-1; $i>=0; $i--){
        echo "<div class='nk-comment'>";
        echo "<div class='nk-comment-meta'>";
        echo "<img src='assets/images/avatar-2.jpg' alt='Witch Murder' class='rounded-circle' width='35'>by <a href=''>".$list[$i]["username"]."</a> in ".$list[$i]["date"];
        echo "<span class='nk-product-rating nk-review-rating'>
        <span class='nk-product-rating-front' style='width: ".convertStars($list[$i]["nb_stars"])."%;'>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='far fa-star'></i>
        </span>
        <span class='nk-product-rating-back>
            <i class='far fa-star'></i>
            <i class='far fa-star'></i>
            <i class='far fa-star'></i>
            <i class='far fa-star'></i>
            <i class='far fa-star'></i>
            <i class='far fa-star'></i>
        </span>
        </span>";
        echo "</div>";
        echo "<div class='nk-comment-text'>";
        echo "<p>".$list[$i]["title"]."</p>";
        echo "<p>".$list[$i]["content"]."</p>";
        echo "</div>";
        echo "<form action='core/addlike.php' method='get' onsubmit='return checkLogged(\"warning-login\", ".$j.");'>";
        echo "<a name='warning-login' style='visibility: hidden; color: white;'>Please Sign in first!</a>";
        echo "<input type='hidden' name='rrr' value='rth'>";
        echo "<input type='hidden' name='userLogged' value='".checkIfSet()."'>";
        echo "<input type='hidden' name='id_game' value='".$_GET["id_game"]."'>";
        echo "<input type='hidden' name='id_rev' value='".$list[$i]["id_rev"]."'>";
        echo "<input type='hidden' name='username' value='".$list[$i]["username"]."'>";
        echo "<input type='hidden' id='react_type' name='reaction'>";
        echo "<table>";
        echo "<tr>";
        echo "<td><button ";
        if(isset($_SESSION["username"])){
            setClicked($list[$i]["id_rev"], $_SESSION["username"], 1);
        }
        echo "class='react' onclick=\"document.getElementsByName('reaction')[".$j."].value = '1';\" type='submit'><img src='assets/images/like-react.png'> (".getReact($list[$i]["id_rev"], 1).")</button></td>";
        echo "<td><button ";
        if(isset($_SESSION["username"])){
            setClicked($list[$i]["id_rev"], $_SESSION["username"], 2);
        }
        echo "class='react' onclick=\" document.getElementsByName('reaction')[".$j."].value = '2';\" type='submit'><img src='assets/images/heart-react.png'> (".getReact($list[$i]["id_rev"], 2).")</button></td>";
        echo "<td><button ";
        if(isset($_SESSION["username"])){
            setClicked($list[$i]["id_rev"], $_SESSION["username"], 3);
        }
        echo "class='react' onclick=\"document.getElementsByName('reaction')[".$j."].value = '3';\" type='submit'><img src='assets/images/hot-react.png'> (".getReact($list[$i]["id_rev"], 3).")</button></td>";
        echo "<td><button ";
        if(isset($_SESSION["username"])){
            setClicked($list[$i]["id_rev"], $_SESSION["username"], 4);
        }
        echo "class='react' onclick=\" document.getElementsByName('reaction')[".$j."].value = '4';\" type='submit'><img src='assets/images/sad-react.png'> (".getReact($list[$i]["id_rev"], 4).")</button></td>";
        echo "</tr>";
        echo "</table>";
        echo "</form>";
        if(isset($_SESSION["username"]) && ($_SESSION["username"] == $list[$i]["username"])){
            echo "<form action='core/delete-review.php' method='post' >";
            echo "<input type='hidden' name='id_rev' value='".$list[$i]["id_rev"]."'>";
            echo "<input type='submit' value='Delete'>";
            echo "</form>";
        }
        echo "</div>";
        $j++;
    }
?>