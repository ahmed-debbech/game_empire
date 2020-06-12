<?php

include_once 'core/CartC.php';
if(isset($_SESSION['username'])){
$cart2C=new cartC();
$username=$_SESSION["username"]; 
$list6=$cart2C->showcarts($username); 
$list3=$cart2C->showcarts($username); 
$list2=$cart2C->showcarts($username); 
$cq='0';
echo'<li>
<span class="nk-cart-toggle">
<span class="fa fa-shopping-cart"></span>';
foreach($list3 as $row)
{
    foreach($list2 as $row){
    $cq=$row['game_quantity']+$cq;
    } 
}

echo'<span class="nk-badge">'.$cq.'</span>
</span>
<div class="nk-cart-dropdown">';
if(empty($row['game_name'])){

    echo'<div class="nk-widget-post">

</div>

<div class="nk-gap-2"></div>
<div class="text-center">
<h4>
Your cart is empty
<div class="nk-gap-1"></div>
Looks like you haven\'t added anything to your cart yet
</h4>

    <a href="store.php" class="nk-btn nk-btn-rounded nk-btn-color-main-1 nk-btn-hover-color-white">Browse Products</a>
</div>
</div>';
}
else{
foreach($list6 as $row)
      {
     
  echo '
    <div class="nk-widget-post">
    <a href="store-product.html" class="nk-post-image">

        <img src="data:image/jpeg;base64,'.base64_encode($row['game_img'] ).'" alt="'.$row['game_name'].'">
    </a>
    <h4>
        <a href="view/updateCart.php?act=delete&id='.$row['game_name'].'" class="nk-cart-remove-item"><span class="ion-android-close"></span></a>
        <div class="nk-product-title h5">'.$row['game_name'].'</div>
        <div class="nk-gap"></div>
        <div class="nk-product-title h6">Qty: &times'.$row['game_quantity'].'</div>
        <div class="nk-gap"></div>
        <div class="nk-product-title h5">'.$row['game_price'].'.00 $</div>
        
    </h4>
    <h4 class="nk-post-title">

    </h4>


    </div>
  ';   
}


    echo'<div class="nk-gap-2"></div>
    <div class="text-center">
    <a href="store-cart.php" class="nk-btn nk-btn-rounded nk-btn-block nk-btn-color-white nk-btn-hover-color-red">View Cart</a>
    </div><br>
    <div class="text-center">
        <a href="store-checkout.php" class="nk-btn nk-btn-block nk-btn-rounded nk-btn-color-main-1 nk-btn-hover-color-white">Proceed to Checkout</a>
    </div>
</div>
</li>';
}
}
?>