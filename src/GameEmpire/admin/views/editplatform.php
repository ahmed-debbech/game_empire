<?PHP
include "../entities/platform.php";
include "../core/platformC.php";


  
         
echo $_GET['id_plat'];
                               
if (isset($_GET['id_plat']) and isset($_GET['name']))   
{
        $platform1=new platform($_GET['id_plat'],$_GET['name']);
        $platform1C=new platformC();
        $id_plat=$_GET['id_plat'];
        $name=$_GET['name'];
        
        $sql="UPDATE platform SET name='$name' where id_plat='$id_plat'";
            $db = config::getConnexion();
            try{
            $req=$db->prepare($sql);
            $req->execute();
            
            echo '<script>alert("Modifié")</script>'; 
           header("Location: products1.php");
            exit();
            
        }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();

           
            
            }
}
?>