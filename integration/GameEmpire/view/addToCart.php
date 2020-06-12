<?php  
ob_start();
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/GameEmpire/core/CartC.php';
include $_SERVER['DOCUMENT_ROOT'].'/GameEmpire/entities/cart.php';
$previous = "javascript:history.go(-1)";
if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
}
if (isset($_GET['id_game']))
{
$cartC=new cartC();
$result=$cartC->recupererCart($_GET['id_game']);
foreach($result as $row){
  $username=$_SESSION["username"];    
  $game_name=$row['name'];
  $price=$row['price'];
  $solde=$row['solde'];
  $game_img=$row['img'];
  $quantity=1;         
}
$cart2C=new cartC();
$list=$cart2C->showcarts($username); 
foreach($list as $row){
  $game_cart=$row['game_name'];
  $cart_quantity=$row['game_quantity'];
}
if (empty($solde)) {
  $cart1=new cart($username,$game_name,$game_img,$price);
}
else{
  $cart1=new cart($username,$game_name,$game_img,$solde);
}
   
   $cart1C=new cartC(); 
   if($game_cart === $game_name)
   {
     $cart_quantity_update=$cart_quantity+1;
     $cart1C->modifyCart($cart_quantity_update,$game_cart);
     header('Location: '.$previous.'');
  }
  else
  {
   $cart1C->addToCart($cart1);
   header('Location: '.$previous.'');
  }
}
?> 
