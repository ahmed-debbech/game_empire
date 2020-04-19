<?php
include_once("core/reviewC.php");
include_once("entities/review.php");
include("config.php");
$revC = new reviewC();
$list = $revC->getReviews($_GET["id_game"]);
for($i=0; $i<=sizeof($list)-1; $i++){
    echo "<div class='nk-comment'>";
    echo "<div class='nk-comment-meta'>";
    echo "<img src='assets/images/avatar-2.jpg' alt='Witch Murder' class='rounded-circle' width='35'>by <a href=''>".$list[$i]["username"]."</a> in ".$list[$i]["date"];
    echo "<span class='nk-product-rating nk-review-rating'>
    <span class='nk-product-rating-front' style='width: 80%;'>
        <i class='fa fa-star'></i>
        <i class='fa fa-star'></i>
        <i class='fa fa-star'></i>
        <i class='fa fa-star'></i>
        <i class='fa fa-star'></i>
        <i class='fa fa-star'></i>
    </span>
    <span class='nk-product-rating-back'>
        <i class='far fa-star'></i>
        <i class='far fa-star'></i>
        <i class='far fa-star'></i>
        <i class='far fa-star></i>
        <i class='far fa-star'></i>
        <i class='fa fa-star'></i>
    </span>
</span>";
    echo "</div>";
    echo "<div class='nk-comment-text'>";
    echo "<p>".$list[$i]["title"]."</p>";
    echo "<p>".$list[$i]["content"]."</p>";
    echo "</div>";
    echo "</div>";
}
?>