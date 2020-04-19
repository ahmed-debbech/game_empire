<?php
include_once("core/reviewC.php");
include_once("entities/review.php");
include("config.php");
$revC = new reviewC();
$list = $revC->getReviews($_GET["id_game"]);
for($i=0; $i<=sizeof($list)-1; $i++){
    echo "<div class='nk-comment'>";
    echo "<div class='nk-comment-meta'>";
    echo "<img src='assets/images/avatar-2.jpg' alt='Witch Murder' class='rounded-circle' width='35'> by <a href='https://nkdev.info/'>Witch Murder</a> in 20 September, 2018";
    echo "</div>";
    echo "<div class='nk-comment-text'>";
    echo "<p>".$list[$i]["title"]."</p>";
    echo "<p>".$list[$i]["content"]."</p>";
    echo "</div>";
    echo "</div>";
}
?>