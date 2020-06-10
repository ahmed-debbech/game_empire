<!DOCTYPE html>
<html>
<head>
	<title></title>
		  <script src="../dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="../dist/sweetalert.css">
</head>
<body>

</body>
</html>


<?php
include "eventc.php";
include "../entities/event.php";

                                
if (isset($_GET['id_event']) and isset($_GET['id_org']) and isset($_GET['namee']) and isset($_GET['typee']) and isset($_GET['pic']) and isset($_GET['date_start'])and isset($_GET['date_end'])and isset($_GET['location'])and isset($_GET['detail'])and isset($_GET['video'])and isset($_GET['site']) )
{
        $event=new event($_GET['id_event'],$_GET['id_org'],$_GET['namee'],$_GET['typee'],$_GET['pic'],$_GET['date_start'],$_GET['date_end'],$_GET['location'],$_GET['detail'],$_GET['video'],$_GET['site']);
        $eventc=new eventc();
        $id_org=$_GET['id_org'];
        $id_event=$_GET['id_event'];
        $pic=$_GET['pic'];
        $namee=$_GET['namee'];
        $typee=$_GET['typee'];
        $date_start=$_GET['date_start'];
        $date_end=$_GET['date_end'];
        $location=$_GET['location'];
        $detail=$_GET['detail'];
        $video=$_GET['video'];
        $site=$_GET['site'];


        $sql="UPDATE event SET namee='$namee',pic='$pic',typee='$typee',date_start='$date_start',date_end='$date_end',location='$location',detail='$detail',video='$video',site='$site' where id_event='$id_event'";
            $db = config::getConnexion();
            try{
            $req=$db->prepare($sql);
            $req->execute();
            
           header("Location: ../views/collab2.php?ed2=1");
            exit();
            
        }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();

           
            
            }
}


?>

