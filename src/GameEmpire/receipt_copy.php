<?php
ob_start();
if(!isset($_SESSION)){
    session_start();
  }
include_once $_SERVER['DOCUMENT_ROOT'].'/GameEmpire/core/dorderC.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/GameEmpire/core/orderC.php';
$order1C=new orderC();
$dorder1C= new dorderC();
$username=$_SESSION["username"];
if (isset($_GET['act']) && $_GET['act'] == 'overview')
{
$order_id = $_GET['id'];
$user = $_SESSION["username"];
$list=$order1C->order_display_by_id($order_id);
$list1=$dorder1C->dorder_display_by_id($order_id);
$list3=$order1C->order_display_by_id($order_id);
$list4=$order1C->order_display_by_username($user);
$rowcount=$list4->rowCount();
$list5=$dorder1C->dorder_display_by_id($order_id);
}
$message ='<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GameEmpire - Invoice</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .line {
            border-bottom: 3px solid #000;
            width: 100%;
        }

        .line-light {
            width: 100%;
            border-bottom: 1px solid #949597;
        }

        .line-end {
            width: 100%;
            border-bottom: 3px solid #f0c29e;
        }

        .data {
            background-color: #dcdddf;
            padding-left: 45px;
        }

        .data .data-box {
            margin-top: 60px;
        }

        .data .data-box .data-separator {
            border-top: 1px solid #949597;
            width: 10%;
        }

        .content {
            background-color: #f1f1f1;
            padding-right: 45px;
        }

        .without-margin {
            margin: 0 !important;
        }

        /* To break in pages, please use this class */
        /* https://github.com/barryvdh/laravel-snappy/issues/2 */
        .page
        {
            page-break-after: always;
            page-break-inside: avoid;
        }
    </style>
</head>
<body>';
foreach($list5 as $row){
}
$message .='<div id="divToPrint" class="container">
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>
    <div id="app" class="container invoice">
        <div class="row">
            <!-- data -->
            <div class="col-4 data py-4">
                <div class="line mt-4 mb-4"></div>
                <h1>INVOICE</h1>

                <div class="data-box">
                    <div class="data-separator d-block my-2"></div>
                    <h4 class="text-muted font-weight-light">No.</h4>
                    <h4 class="font-weight-bold">'.$row['invoice_no'].'</h4>
                </div>
                <div class="data-box">
                    <div class="data-separator d-block my-2"></div>
                    <h4 class="text-muted font-weight-light">INVOICE DATE</h4>
                    <h4 class="font-weight-bold">'.$row['created_date'].'</h4>
                </div>

            </div>
            <!-- end data -->

            <!-- content -->
            <div class="col-8 content py-4">
                <div class="line mt-4 mb-4"></div>
                <!-- header -->
                <div class="header">
                    <div class="row">
                        <div class="col-6 from">
                            <span class="d-block font-weight-light">FROM:</span>
                            <h3>Game Empire</h3>
                            <span class="d-block font-weight-light"><i class="fas fa-map-marker-alt"></i>  906  Crestview Terrace</span>
                            <span class="d-block font-weight-light">&nbsp;&nbsp;&nbsp;&nbsp;Willow City, 78675, New York</span>
                            <span class="d-block font-weight-light"><i class="far fa-envelope"></i> <a class="text-muted text-right" href="mailto:support@gameempire.com">support@gameempire.com</a></span>
                            <span class="d-block font-weight-light"><i class="fas fa-phone"></i> 830-685-9421</span>
                        </div>';

                        $message .='<div class="col-6 to">
                            <span class="d-block font-weight-light">TO:</span>
                            <h3>'.$row['first_name'].' '.$row['last_name'].'</h3>
                            <span class="d-block font-weight-light"><i class="fas fa-map-marker-alt"></i> '.$row['address'].'</span>
                            <span class="d-block font-weight-light">&nbsp;&nbsp;&nbsp;&nbsp;'.$row['town'].' '.$row['postcode'].' '.$row['state'].'</span>
                            <span class="d-block font-weight-light"><i class="far fa-envelope"></i> '.$row['email'].'</span>
                            <span class="d-block font-weight-light"><i class="fas fa-phone"></i> '.$row['phone'].'</span>
                        </div>';
                    $message .='</div>
                </div>
                <!-- end header -->

                <!-- note -->
                <!-- end note -->

                <!-- items-header -->
                <div class="items-header">
                    <div class="row mt-4 items-header font-weight-bold">
                        <div class="col-12 my-2">
                            <div class="line"></div>
                        </div>
                        <div class="col-6">DESCRIPTION</div>
                        <div class="col-2 text-center">PRICE</div>
                        <div class="col-2 text-center">QUANTITY</div>
                        <div class="col-2 text-right">TOTAL</div>
                        <div class="col-12 my-2">
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
                <!-- end items-header -->';
                foreach($list as $rowc){
                    foreach($list1 as $row) 
                    {
                $message .='<!-- items -->
                <div class="items">
                    <div class="row mt-2 list-content">
                        <div class="col-6">
                            <p class="without-margin">'.$row['game_name'].'</p>
                        </div>
                        <div class="col-2 text-center">$ '.$row['game_price'].'</div>
                        <div class="col-2 text-center">'.$row['game_quantity'].'</div>
                        <div class="col-2 text-right">$ '.$row['game_price'] * $row['game_quantity'].'</div>
                    </div>
                    <div class="row">
                        <div class="col-12 my-2">
                            <div class="line-light"></div>
                        </div>
                    </div>
                    ';}}
                $message .='
                </div>
                <!-- end items -->

                <!-- values -->
                <div class="values">
                    <div class="row">
                        <div class="col-12 my-2">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div class="row mt-2 list-content">
                        <div class="col-10 font-weight-bold">
                            SUBTOTAL
                        </div>
                        <div class="col-2 text-right font-weight-bold">$ '.$row['order_total'].'</div>
                    </div>
                    <div class="row mt-2 list-content">
                        <div class="col-9">
                            <h3 class="font-weight-bold">TOTAL</h3>
                        </div>
                        <div class="col-3 text-right">
                            <h3 class="font-weight-bold">$ '.$row['order_total'].'</h3>
                        </div>
                    </div>
                </div><!-- end values -->

                <!-- signature -->

                <!-- end signature -->

                <!-- gratitude -->
                <div class="gratitude text-center my-4">
                    <p class="text-muted">If you have any question about this invoice, please contact our support on <a class="text-muted text-right" href="mailto:support@gameempire.com">support@gameempire.com</a>, or to the mobile phone 830-685-9421.</p>
                    <h2>Thank you</h2>
                </div>
                <!-- end gratitude -->

                <!-- pagination -->
                <div class="invoice-pagination text-right">
                    <!--<input class="text-muted text-right" type="button" value="Save" onclick="PrintDiv();" />-->
                    <a href="#" class="text-muted text-right" onclick="PrintDiv();"><i class="fas fa-print"></i> Save as PDF</a>
                </div>
                <!-- end pagination -->
            </div>
            <!-- end content -->
        </div>
    </div>

    <!-- Scripts -->
    <script defer src="assets/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="assets/vendor/fontawesome-free/js/v4-shims.js"></script>

    <!-- IonIcons -->
    <link rel="stylesheet" href="assets/vendor/ionicons/css/ionicons.min.css">
    <script src="assets/js/saveaspdf.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>';
?>
<!DOCTYPE html>
<html>
<body>
<script src="assets/js/saveaspdf.js"></script>
<div id="divToPrint">
  <div>
           <?php echo $message; ?>      
  </div>
</div>
<div style="Display:none;">
  <input type="button" value="print" onclick="PrintDiv();" />
</div>
</body>
</html>