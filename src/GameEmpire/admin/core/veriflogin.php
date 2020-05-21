<?php
include_once 'AdminC.php';
	if(isset($_POST['login']) && isset($_POST['password']))
{
	$adminC = new adminC();
	$result = $adminC->verifierLogin($_POST['login'],$_POST['password']);
	if($result->count==0)
	{
	header("location:../views/login.php"); 
		
	}
	else
	{
		session_start();
		$_SESSION['id'] = $result->id;
		$_SESSION['mdp'] = $result->mdp;
		$currentUrl = $_SESSION['currentURL'];
		

		header("location:../views/products.php"); 
	}

}
else
{
	header("location:../views/login.php");
}



 ?>