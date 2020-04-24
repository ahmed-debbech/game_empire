<?php
include("likeC.php");
include_once("../entities/like.php");

$likeC = new likeC();
echo "erf".$_GET["reaction"];
$like = new Like(0,$_GET['id_rev'],$_GET["username"],$_GET["reaction"]);
$likeC->addLike($like);
header("Location: ../store-product.php?id_game=".$_GET["id_game"]);
?>