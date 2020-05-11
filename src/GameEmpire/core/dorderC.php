<?php
include_once $_SERVER['DOCUMENT_ROOT']. '/GameEmpire/config.php';
class dorderc
{
function new_order_details($dorder){
    //$date = date('Y-m-d H:i:s');
    //$status="Pending";
    //$delivery_status="Pending";
    $sql="INSERT INTO `order_details`(`invoice_no`,`game_name`,`game_img`,`game_price`,`game_quantity`,`order_id`,`created_date`,`order_quantity`, `order_total`,`first_name`,`last_name`,`email`,`company`,`address`,`phone`,`postcode`,`town`,`state`,`country`) VALUES (:invoice_no,:game_name,:game_img,:game_price,:game_quantity,:order_id,CURRENT_TIMESTAMP,:order_quantity,:order_total,:first_name,:last_name,:email,:company,:address,:phone,:postcode,:town,:state,:country)";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);
        $invoice_no=$dorder->get_invoice_no();
        $game_name=$dorder->get_game_name();
        $game_img=$dorder->get_game_img();
        $game_price=$dorder->get_game_price();
        $game_quantity=$dorder->get_game_quantity();
        $order_id=$dorder->get_order_id();
        $order_quantity=$dorder->get_order_quantity();
        $order_total=$dorder->get_order_total();
        $first_name=$dorder->get_first_name();
        $last_name=$dorder->get_last_name();
        $company=$dorder->get_company();
        $address=$dorder->get_address();
        $phone=$dorder->get_phone();
        $postcode=$dorder->get_postcode();
        $town=$dorder->get_town();
        $state=$dorder->get_state();
        $country=$dorder->get_country();
        $email=$dorder->get_email();
        $req->bindValue(':invoice_no',$invoice_no);
        $req->bindValue(':game_name',$game_name);
        $req->bindValue(':game_img',$game_img);
        $req->bindValue(':game_price',$game_price);
        $req->bindValue(':game_quantity',$game_quantity);
        $req->bindValue(':order_id',$order_id);
        $req->bindValue(':order_quantity',$order_quantity);
        $req->bindValue(':order_total',$order_total);
        $req->bindValue(':first_name',$first_name);
        $req->bindValue(':last_name',$last_name);
        $req->bindValue(':company',$company);
        $req->bindValue(':address',$address);
        $req->bindValue(':phone',$phone);
        $req->bindValue(':postcode',$postcode);
        $req->bindValue(':town',$town);
        $req->bindValue(':state',$state);
        $req->bindValue(':country',$country);
        $req->bindValue(':email',$email);
            $req->execute();       
        }
        catch (Exception $e){
            echo 'Error: '.$e->getMessage();
        }   
  }
  function showorder ($dorder){
    echo "First Name: ".$dorder->get_first_name()."<br>";
    echo "Last Name: ".$dorder->get_last_name()."<br>";
}
  function get_order_details($order_id){
    $sql="SELECT c.*,o.* FROM `cart` AS c INNER JOIN `order` as o ON c.username=o.username  where order_id='$order_id'";
    $db = config::getConnexion();
    try{
    $list=$db->query($sql);
    return $list;
    }
    catch (Exception $e){
        die('Error: '.$e->getMessage());
    }
}
function show_orders_details(){
    $sql="SElECT * From order_details";
    $db = config::getConnexion();
    try{
    $list=$db->query($sql);
    return $list;
    }
    catch (Exception $e){
        die('Error: '.$e->getMessage());
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

function dorder_display_by_id($reference)
{
    $sql = "SELECT * FROM `order_details` WHERE `order_id`='$reference'";
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
} 



/*function delete_order($reference){
        $sql="DELETE FROM order where reference= :reference";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':reference',$reference);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
        function modify_rorder($ref,$new,$modwhat){
        if ($modwhat=="status") {
            $sql="UPDATE order SET status=:input WHERE reference=:ref";
        }
        if ($modwhat=="delivery status") {
            $sql="UPDATE orders SET dstatus=:input WHERE reference=:ref";
        }
        

        
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':input',$new);
        $req->bindValue(':ref',$ref);

        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        }*/


 ?>
