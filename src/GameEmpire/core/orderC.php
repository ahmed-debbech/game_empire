<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/GameEmpire/config.php';
class orderc
{
    function new_order($order)
    {
        //$date = date('Y-m-d H:i:s');
        $status = "Pending";
        $sql = "INSERT INTO `order`(`order_id`, `username`, `created_date`,`order_quantity`, `order_total`, `order_note`, `status`) 
    VALUES (:order_id,:username,CURRENT_TIMESTAMP,:order_quantity,:order_total,:order_note,'$status')";
        $db = config::getConnexion();
        try
        {
            $req = $db->prepare($sql);
            $order_id = $order->get_order_id();
            $username = $order->get_username();
            $order_quantity = $order->get_order_quantity();
            $order_total = $order->get_order_total();
            $order_note = $order->get_order_note();

            $req->bindValue(':order_id', $order_id);
            $req->bindValue(':username', $username);
            $req->bindValue(':order_quantity', $order_quantity);
            $req->bindValue(':order_total', $order_total);
            $req->bindValue(':order_note', $order_note);

            $req->execute();

        }
        catch(Exception $e)
        {
            echo 'Error: ' . $e->getMessage();
        }

    }
    function showorder($order)
    {
        echo "reference: " . $order->get_reference() . "<br>";
        echo "name: " . $order->get_name() . "<br>";
        echo "date: " . $order->get_date() . "<br>";
        echo "state: " . $order->get_status() . "<br>";
        echo "quantity: " . $order->get_quantity() . "<br>";
        echo "total: " . $order->get_total() . "<br>";
        echo "dstate: " . $order->get_dstatus() . "<br>";
    }
    function order_row_count()
    {
        $sql = "SELECT count(*) as row_total FROM `order`";
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

    function order_display_all()
    {
        $sql = "SELECT o.*, @rownum := @rownum + 1 AS row_num FROM `order` o, (SELECT @rownum := 0) r";
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
    function order_decline($ref)
    {
        $status = "Declined";
        $sql = "UPDATE `order` SET `status`=:status,`modified_date`=CURRENT_TIMESTAMP WHERE `order_id`=:ref";

        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':ref', $ref);
        $req->bindValue(':status', $status);
        try
        {
            $req->execute();
            // header('Location: index.php');
            
        }
        catch(Exception $e)
        {
            die('Error: ' . $e->getMessage());
        }
    }

    function order_display_by_id($reference)
    {
        $sql = "SELECT * FROM `order` WHERE `order_id`='$reference'";
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
    function order_display_by_username($username)
    {
        $sql = "SELECT * FROM `order` WHERE `username`='$username'";
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
    function order_confirm($ref)
    {
        $status = "Approved";
        $sql = "UPDATE `order` SET `status`='$status',`modified_date`=CURRENT_TIMESTAMP WHERE `order_id`=:ref";

        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':ref', $ref);
        try
        {
            $req->execute();
            // header('Location: index.php');
            
        }
        catch(Exception $e)
        {
            die('Error: ' . $e->getMessage());
        }
    }
    function get_order($login)
    {
        $sql = "SELECT * from cart where username='$login'";
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
}
?>
