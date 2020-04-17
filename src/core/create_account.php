<?php
include("userC.php");
include_once("../entities/user.php");
if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["password"])
&& !empty($_POST["adress"]) && !empty($_POST["phone"])){
    $user = new User($_POST["username"], $_POST["name"], $_POST["password"], $_POST["email"], $_POST["adress"], $_POST["phone"],1);
    $userC = new userC();
    $userC->addUser($user);
}
?>