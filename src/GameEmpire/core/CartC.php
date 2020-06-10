<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once $_SERVER['DOCUMENT_ROOT'].'/GameEmpire/config.php';
class cartc
{
    function addToCart($cart)
    {
        $sql = "INSERT INTO cart (username,game_name,game_img,game_price,game_quantity) VALUES (:username,:game_name,:game_img,:price,1)";
        $db = config::getConnexion();
        try
        {
            $req = $db->prepare($sql);
            $username = $cart->get_username();
            $game_img = $cart->get_game_img();
            $game_name = $cart->get_game_name();
            $price = $cart->get_price();
            $req->bindValue(':username', $username);
            $req->bindValue(':game_name', $game_name);
            $req->bindValue(':game_img', $game_img);
            $req->bindValue(':price', $price);
            $req->execute();
        }
        catch(Exception $e)
        {
            echo 'Error: ' . $e->getMessage();
        }
    }
    function showCart($cart)
    {
        echo "username: " . $cart->get_username() . "<br>";
        echo "game_name: " . $cart->get_game_name() . "<br>";
        echo "price: " . $cart->get_price() . "<br>";
        echo "quantity: " . $cart->get_quantity() . "<br>";
    }
    function recupererCart($reference)
    {
        $sql = "SELECT g.id_game,g.name,g.price,g.solde,i.name as img FROM game AS g INNER JOIN image as i ON g.id_game=i.id_game WHERE g.id_game='$reference'";
        $db = config::getConnexion();
        try
        {
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e)
        {
            die('Error: ' . $e->getMessage());
        }
    }

    function showcarts($username)
    {
        $sql = "SElECT * from cart where username='$username'";
        $db = config::getConnexion();
        try
        {
            $list = $db->query($sql);
            return $list;
        }
        catch(Exception $e)
        {
            die('Error: ' . $e->getMessage());
        }
    }

    function deleteCart($game_name)
    {
        $sql = "DELETE FROM cart WHERE game_name= :game_name";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':game_name', $game_name);
        try
        {
            $req->execute();
        }
        catch(Exception $e)
        {
            die('Error: ' . $e->getMessage());
        }
    }
    function deleteAllCart($username)
{
    $sql = "DELETE FROM cart WHERE username= :username";
    $db = config::getConnexion();
    $req = $db->prepare($sql);
    $req->bindValue(':username', $username);
    try
    {
        $req->execute();
    }
    catch(Exception $e)
    {
        die('Error: ' . $e->getMessage());
    }
}
    function modifyCart($quantity, $game_name)
    {
        $sql = "UPDATE cart SET game_quantity=:quantity WHERE game_name=:game_name";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':quantity', $quantity);
        $req->bindValue(':game_name', $game_name);
        try
        {
            $req->execute();
        }
        catch(Exception $e)
        {
            die('Error: ' . $e->getMessage());
        }
    }
}

?>
