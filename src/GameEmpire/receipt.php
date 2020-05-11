<?
ob_start();
if(!isset($_SESSION)){
    session_start();
  }
include("core/CartC.php");
$cart1C=new cartC();
$username=$_SESSION["username"]; 
$list=$cart1C->showcarts($username); 
$list1=$cart1C->showcarts($username); 
$list2=$cart1C->showcarts($username); 
$list3=$cart1C->showcarts($username); 
$q="0";
$cq="0";
$t="0";
$email = $_SESSION["email"]; 
echo $email;
$message ='
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Email Receipt</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style type="text/css">
            @media screen {
                @font-face {
                    font-family: "Source Sans Pro";
                    font-style: normal;
                    font-weight: 400;
                    src: local("Source Sans Pro Regular"), local("SourceSansPro-Regular"), url(https://fonts.gstatic.com/s/sourcesanspro/v10/ODelI1aHBYDBqgeIAH2zlBM0YzuT7MdOe03otPbuUS0.woff) format("woff");
                }
                @font-face {
                    font-family: "Source Sans Pro";
                    font-style: normal;
                    font-weight: 700;
                    src: local("Source Sans Pro Bold"), local("SourceSansPro-Bold"), url(https://fonts.gstatic.com/s/sourcesanspro/v10/toadOcfmlt9b38dHJxOBGFkQc6VGVFSmCnC_l7QZG60.woff) format("woff");
                }
            }  
            body,
            table,
            td,
            a {
                -ms-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%; 
            table,
            td {
                mso-table-rspace: 0pt;
                mso-table-lspace: 0pt;
            }
            img {
                -ms-interpolation-mode: bicubic;
            }
            a[x-apple-data-detectors] {
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                color: inherit !important;
                text-decoration: none !important;
            }

            div[style*="margin: 16px 0;"] {
                margin: 0 !important;
            }
            body {
                width: 100% !important;
                height: 100% !important;
                padding: 0 !important;
                margin: 0 !important;
            }
            table {
                border-collapse: collapse !important;
            }
            
            a {
                color: #1a82e2;
            }
            
            img {
                height: auto;
                line-height: 100%;
                text-decoration: none;
                border: 0;
                outline: none;
            }
        </style>

    </head>

    <body style="">


        <div class="preheader" style="display: none; max-width: 0; max-height: 0; overflow: hidden; font-size: 1px; line-height: 1px; color: #fff; opacity: 0;">
            A preheader is the short summary text that follows the subject line when an email is viewed in the inbox.
        </div>

        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td align="center">
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
        <tr>
        <td align="center" valign="top" width="600">
        <![endif]-->
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                        <tr>
                            <td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
                                <h1 style="margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">Thank you for your order!</h1>
                            </td>
                        </tr>
                    </table>

                </td>
            </tr>

            <tr>
                <td align="center">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">

                        <tr>
                            <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
                                <p style="margin: 0;">Here is a summary of your recent order. If you have any questions or concerns about your order, please <a href="https://sendgrid.com">contact us</a>.</p>
                            </td>
                        </tr>

                        <tr>
                            <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tr>
                                        <td align="left" width="75%" style="padding: 12px;font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;"><strong>Order #</strong></td>
                                        <td align="left" width="25%" style="padding: 12px;font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;"><strong>0000224</strong></td>
                                    </tr>';
foreach($list1 as $row)    
 {
     foreach($list as $row){
        $t=($row["game_price"]*$row["game_quantity"])+$t;
$message .='<tr>
<td align="left" width="75%" style="padding: 6px 12px;font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">'.$row['game_name'].'</td>
<td align="left" width="25%" style="padding: 6px 12px;font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">$'.$row['game_price'].'</td>
</tr>';     
                                } }
                                    $message .='<tr>
                                        <td align="left" width="75%" style="padding: 6px 12px;font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">Shipping</td>
                                        <td align="left" width="25%" style="padding: 6px 12px;font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">$0.00</td>
                                    </tr>
                                    <tr>
                                        <td align="left" width="75%" style="padding: 6px 12px;font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">Sales Tax</td>
                                        <td align="left" width="25%" style="padding: 6px 12px;font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">$0.00</td>
                                    </tr>
                                    <tr>
                                        <td align="left" width="75%" style="padding: 12px; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-top: 2px dashed #D2C7BA; border-bottom: 2px dashed #D2C7BA;"><strong>Total</strong></td>
                                        <td align="left" width="25%" style="padding: 12px; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-top: 2px dashed #D2C7BA; border-bottom: 2px dashed #D2C7BA;"><strong>$'.$t.'</strong></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <!-- end reeipt table -->

                    </table>
                    <!--[if (gte mso 9)|(IE)]>
        </td>
        </tr>
        </table>
        <![endif]-->
                </td>
            </tr>
            <!-- end copy block -->

            <!-- start receipt address block -->
            <tr>
                <td align="center" valign="top" width="100%">
                    <!--[if (gte mso 9)|(IE)]>
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
        <tr>
        <td align="center" valign="top" width="600">
        <![endif]-->
                    <table align="center" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                        <tr>
                            <td align="center" valign="top" style="font-size: 0; border-bottom: 3px solid #d4dadf">
                                <!--[if (gte mso 9)|(IE)]>
              <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
              <tr>
              <td align="left" valign="top" width="300">
              <![endif]-->
                                <div style="display: inline-block; width: 100%; max-width: 50%; min-width: 240px; vertical-align: top;">
                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 300px;">
                                        <tr>
                                            <td align="left" valign="top" style="padding-bottom: 36px; padding-left: 36px; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
                                                <p><strong>Delivery Address</strong></p>
                                                <p>'.$_SESSION['address'].'<br>'.$_SESSION['town'].'<br>'.$_SESSION['country'].', '.$_SESSION['postcode'].'</p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <!--[if (gte mso 9)|(IE)]>
              </td>
              <td align="left" valign="top" width="300">
              <![endif]-->
                                <div style="display: inline-block; width: 100%; max-width: 50%; min-width: 240px; vertical-align: top;">
                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 300px;">
                                        <tr>
                                            <td align="left" valign="top" style="padding-bottom: 36px; padding-left: 36px; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
                                                <p><strong>Billing Address</strong></p>
                                                <p>'.$_SESSION['address'].'<br>'.$_SESSION['town'].'<br>'.$_SESSION['country'].', '.$_SESSION['postcode'].'</p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <!--[if (gte mso 9)|(IE)]>
              </td>
              </tr>
              </table>
              <![endif]-->
                            </td>
                        </tr>
                    </table>
                    <!--[if (gte mso 9)|(IE)]>
        </td>
        </tr>
        </table>
        <![endif]-->
                </td>
            </tr>
            <!-- end receipt address block -->

            <!-- start footer -->
            <tr>
                <td align="center" style="padding: 24px;">
                    <!--[if (gte mso 9)|(IE)]>
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
        <tr>
        <td align="center" valign="top" width="600">
        <![endif]-->
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">

                        <!-- start permission -->

                        <!-- end permission -->

                        <!-- start unsubscribe -->
                        <tr>
                            <td align="center" style="padding: 12px 24px; font-family: "Source Sans Pro", Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; color: #666;">
                                <p style="margin: 0;">To stop receiving these emails, you can <a href="https://sendgrid.com" target="_blank">unsubscribe</a> at any time.</p>
                                <p style="margin: 0;">Paste 1234 S. Broadway St. City, State 12345</p>
                            </td>
                        </tr>
                        <!-- end unsubscribe -->

                    </table>
                    <!--[if (gte mso 9)|(IE)]>
        </td>
        </tr>
        </table>
        <![endif]-->
                </td>
            </tr>
            <!-- end footer -->

        </table>
        <!-- end body -->

    </body>

    </html>';
    //echo $message;
?>