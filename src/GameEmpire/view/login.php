<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ob_start();
if(!isset($_SESSION)){
    session_start();
  }
include_once $_SERVER['DOCUMENT_ROOT'].'/GameEmpire/core/userC.php';
include  $_SERVER['DOCUMENT_ROOT'].'/GameEmpire/entities/user.php';
$customerc = new CustomerC();
$list = $customerc->display_customer();
$password = md5($_POST['password']); 
if (isset($_POST['username']) && isset($password))
{
    $var = 1;
    foreach ($list as $row)
    {
        if ($_POST['username'] == $row['username'] && $password  == $row['password'])
        {
            $var = 0;
            $username=$row['username'];
            $email = $row['email'];
            $fname = $row['firstname'];
            $lname = $row['lastname'];
            $address = $row['address'];
            $companyname = $row['companyname'];
            $town = $row['town'];
            $phone = $row['phone'];
            $state = $row['state'];
            $postcode = $row['postcode'];
            $country = $row['country'];
            $password = $row['password'];
            $role = $row['role'];
            $client1 = new Customer($username,$fname, $lname, $address, $companyname, $town, $email, $phone, $state, $postcode, $country, $password,$role);
        }
    }
    if ($var == 0 && empty($role))
    {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['email'] = $client1->getemail();
        $_SESSION['fname'] = $client1->getfirstname();
        $_SESSION['lname'] = $client1->getlastname();
        $_SESSION['phone'] = $client1->getphone();
        $_SESSION['companyname'] = $client1->getcompanyname();
        $_SESSION['town'] = $client1->gettown();
        $_SESSION['postcode'] = $client1->getpostcode();
        $_SESSION['address'] = $client1->getaddress();
        $_SESSION['state'] = $client1->getstate();
        $_SESSION['country'] = $client1->getcountry();
        echo 'Yes';
    }
    elseif ($var == 0 && $role == 1)
    {
        echo 'Admin';
    }
    else{
        echo 'No';
    }
}
if (isset($_POST["login"]))
{
    unset($_SESSION["username"]);
}
?>
