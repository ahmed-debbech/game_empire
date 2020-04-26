<?php
include("reviewC.php");
$revc = new reviewC();
$count = $revc->countReviews($_GET["id_game"]);
echo $count;
?>