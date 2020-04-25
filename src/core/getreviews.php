<?php
include_once("core/reviewC.php");
include_once("entities/review.php");
include("config.php");
$revC = new reviewC();
$list = $revC->getReviews($_GET["id_game"]);
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
    if(isset($_SESSION['username'])){
        if(!empty($_SESSION['username'])){
            return $_SESSION['username'];
        }
    }
    return "..";
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
    echo "<form action='core/addlike.php' method='get'>";
    echo "<input type='hidden' name='rrr' value='rth'>";
    echo "<input type='hidden' name='userLogged' value='".checkIfSet()."'>";
    echo "<input type='hidden' name='id_game' value='".$_GET["id_game"]."'>";
    echo "<input type='hidden' name='id_rev' value='".$list[$i]["id_rev"]."'>";
    echo "<input type='hidden' name='username' value='".$list[$i]["username"]."'>";
    echo "<input type='hidden' id='react_type' name='reaction'>";
    echo "<table>";
    echo "<tr>";
    echo "<td><button class='react' onclick=\"document.getElementsByName('reaction')[".$j."].value = '1';\" type='submit'><img src='assets/images/like-react.png'></button></td>";
    echo "<td><button class='react' onclick=\"document.getElementsByName('reaction')[".$j."].value = '2';\" type='submit'><img src='assets/images/heart-react.png'></button></td>";
    echo "<td><button class='react' onclick=\"document.getElementsByName('reaction')[".$j."].value = '3';\" type='submit'><img src='assets/images/hot-react.png'></button></td>";
    echo "<td><button class='react' onclick=\"document.getElementsByName('reaction')[".$j."].value = '4';\" type='submit'><img src='assets/images/sad-react.png'></button></td>";
    echo "</tr>";
    echo "</table>";
    echo "</form>";
    echo "</div>";
    $j++;
}
?>