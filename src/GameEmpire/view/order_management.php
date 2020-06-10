<?php
if (!isset($_SESSION))
{
    ob_start();
    session_start();
}
require  $_SERVER['DOCUMENT_ROOT'] . '/GameEmpire/PHPMailerAutoload.php';
include  $_SERVER['DOCUMENT_ROOT'] . '/GameEmpire/core/orderC.php';
$orderC = new orderC();
if (isset($_GET['act']) && $_GET['act'] == 'confirm')
{
    $order_id = $_GET['id'];
    $orderC->order_confirm($order_id);
    $mail = new PHPMailer;    
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'goodgamesproject2020@gmail.com';                 // SMTP username
    $mail->Password = 'xdarkness';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    
    $mail->setFrom('goodgamesproject2020@gmail.com', 'GameEmpire');
    $mail->addAddress('mohammed.nasri@esprit.tn');               // Name is optional
    $mail->Subject = 'Order Approved!';
    $mail->Body    = 'Your order has been approved !';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
if (isset($_GET['act']) && $_GET['act'] == 'decline')
{
    $order_id = $_GET['id'];
    $orderC->order_decline($order_id);
    $mail = new PHPMailer;    
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'goodgamesproject2020@gmail.com';                 // SMTP username
    $mail->Password = 'xdarkness';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    
    $mail->setFrom('goodgamesproject2020@gmail.com', 'GameEmpire');
    $mail->addAddress('mohammed.nasri@esprit.tn');               // Name is optional
    $mail->Subject = 'Order Cancelled!';
    $mail->Body    = 'Were sorry to inform you that your order has been cancelled ! stop using stolen credit cards';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
if (isset($_GET['act']) && $_GET['act'] == 'overview' && isset($_GET['username']))
{
    $order_id = $_GET['id'];
    $username = $_GET['username'];
    //$orderC->order_decline($order_id);
    header('Location: ../admin/views/order-view.php?act=overview&id='.$order_id.'&username='.$username.'');
}
?>
