<?PHP

include "../core/platformC.php";
if (isset($_GET['delete']))
{
	$id=$_GET['delete'];
	$sql="DELETE FROM platform where id_plat= :id_plat";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_plat',$id);
		try{
            if ($req->execute())
            {
            	
		   		header("Location: products1.php");
				exit();
            }
        }
        catch (Exception $e)
        	{
            die('Erreur: '.$e->getMessage());
        	}
		
}
