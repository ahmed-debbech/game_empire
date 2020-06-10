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
include "AdminC.php";
include "../entities/admin.php";

                                
if (isset($_GET['id']) and isset($_GET['mdp']) and isset($_GET['photo']) and isset($_GET['bio']) and isset($_GET['contact']) and isset($_GET['bday'])and isset($_GET['dial'])and isset($_GET['origin'])and isset($_GET['ocp']))
{
        $admin=new admin($_GET['id'],$_GET['mdp'],$_GET['photo'],$_GET['bio'],$_GET['contact'],$_GET['bday'],$_GET['dial'],$_GET['origin'],$_GET['ocp']);
        $AdminC=new AdminC();
        $id=$_GET['id'];
        $mdp=$_GET['mdp'];
        $photo=$_GET['photo'];
        $bio=$_GET['bio'];
        $contact=$_GET['contact'];
        $bday=$_GET['bday'];
        $dial=$_GET['dial'];
        $origin=$_GET['origin'];
        $ocp=$_GET['ocp'];
       


        $sql="UPDATE admin SET id='$id',mdp='$mdp',photo='$photo',bio='$bio',bday='$bday',origin='$origin',dial='$dial',ocp='$ocp',contact='$contact' where id='$id'";
            $db = config::getConnexion();
            try{
            $req=$db->prepare($sql);
            $req->execute();
            
           header("Location: ../views/profile.php?edit=1");
            exit();
            
        }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();

           
            
            }
}


?>