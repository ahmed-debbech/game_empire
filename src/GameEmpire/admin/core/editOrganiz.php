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
include "organizatorc.php";
include "../entities/organizator.php";


                             
if (isset($_GET['id_org']) and isset($_GET['name'])   and isset($_GET['email']) and isset($_GET['phone']) and isset($_GET['img']) )
{
        $organiz=new organiz($_GET['id_org'],$_GET['name'],$_GET['email'],$_GET['phone'],$_GET['img']);
        $organizc=new organizc();
        $id_org=$_GET['id_org'];
        $img=$_GET['img'];
        $name=$_GET['name'];
        $email=$_GET['email'];
        $phone=$_GET['phone'];
        $sql="UPDATE organizator SET name='$name',email='$email',img='$img',phone='$phone' where id_org='$id_org'";
            $db = config::getConnexion();
            try{
            $req=$db->prepare($sql);
            $req->execute();
            
            
           header("Location: ../views/collab.php?edit=1");
            exit();
            
        }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();

           
            
            }
}


?>

