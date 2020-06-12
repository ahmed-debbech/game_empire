<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ob_start();
if(!isset($_SESSION)){
    session_start();
  }
include_once $_SERVER['DOCUMENT_ROOT'].'/GameEmpire/core/orderC.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/GameEmpire/entities/order.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/GameEmpire/core/dorderC.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/GameEmpire/entities/dorder.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/GameEmpire/core/CartC.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/GameEmpire/receipt.php';

$quantity = '0';
$t = '0';

$email= $_POST['email'];
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$company = $_POST['company'];
$address = $_POST['address'];
$town = $_POST['town'];
$phone = $_POST['phone'];
$postcode = $_POST['postcode'];
$state = $_POST['state'];
$country = $_POST['country'];



if(isset($_GET['act']) && $_GET['act']=='place')
{
    $username=$_GET['id'];
    $notes = $_POST['notes'];
    $orderC = new orderC();
    $result = $orderC->get_order($username);
    foreach ($result as $row)
    {
        $username = $_SESSION["username"];
        
        $quantity = $row['game_quantity'] + $quantity;
        
        $t = ($row['game_price'] * $row['game_quantity']) + $t;
    }

    //$order_num = 'GE-' . time();
    $order_num = time();
    $order1 = new order($order_num,$username, $quantity, $t,$notes);
    $order1C = new orderC();
    $order1C->new_order($order1);


    $invoice_no = 'GE-' . time();

    $dorderC = new dorderC();
    $result2 = $dorderC->get_order_details($order_num);
    foreach ($result2 as $row)
    {
        
        $game_name = $row['game_name'];
        $game_img = $row['game_img'];
        $game_price = $row['game_price'];
        $game_quantity = $row['game_quantity'];

        $order_id = $row['order_id'];
        $order_quantity = $row['order_quantity'];
        $order_total = $row['order_total'];
        $status = $row['status'];
        //$delivery_status = $row['delivery_status'];
        $dorder1 = new dorder($invoice_no,$game_name,$game_img,$game_price,$game_quantity,$order_id,$order_quantity,$order_total,$first_name,$last_name,$email,$company,$address,$phone,$postcode,$town,$state,$country,$status);
        $dorder1C = new dorderC();
        $dorder1C->showorder($dorder1);
        $dorder1C->new_order_details($dorder1);
    }
    $cartC=new cartC();
    $cartC->deleteAllCart($username);






    require '../PHPMailerAutoload.php';

    $mail = new PHPMailer;
    
    //$mail->SMTPDebug = 3;                               // Enable verbose debug output
    
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'goodgamesproject2020@gmail.com';                 // SMTP username
    $mail->Password = 'xdarkness';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    
    $mail->setFrom('goodgamesproject2020@gmail.com', 'GameEmpire');
    //$mail->addAddress('mohammed.nasri@esprit.tn', 'Joe User');     // Add a recipient
    $mail->addAddress($email);               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');
    
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML
    //$Vdata = file_get_contents("receipt.php");
    $mail->Subject = 'Order Confirmation!';
    $mail->Body    = 'your order has been placed successfully!';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
     header('Location: ../order-placed.php?act=overview&id='.$order_num.'');
    
}
?>

