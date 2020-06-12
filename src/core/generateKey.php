<?php
session_start();
include_once "keyC.php";
include_once "../entities/key.php";
$n = 10;
function getName($n) { 
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 
$x =  getName($n);
echo $x;
$k = new Key($x, $_SESSION["username"], 100, date("Y-m-d"));
$key1C=new KeyC();
$key1C->ajouterKey($k);

?>