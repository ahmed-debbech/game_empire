<?php
include("../config.php");
$sql="update report set text='".$_GET["text"]."' where id_rep='".$_GET["id"]."'";
$db = config::getConnexion();
try{
	$req=$db->prepare($sql);
	//echo $like->getType();
	$yo = $req->execute();
	var_dump($yo);
}catch (Exception $e){
	echo 'Error: '.$e->getMessage();
}  
?>