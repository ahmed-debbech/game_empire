<?PHP
require_once "config.php";
class platformC {
	function ajouterplatform($platform){
		
		$name=$platform->getname();
        $id_plat=$platform->getid_plat();
        
       /* $urlImage=$produit->getprix();
		/*$req->bindValue(':idProduit',$idProduit);
		$req->bindValue(':name',$name);
		$req->bindValue(':description',$description);
		$req->bindValue(':prixH',$prix);
		$req->bindValue(':urlImage',$urlImage);*/
		$sql="INSERT INTO platform (name,id_plat) values ('$name','$id_plat')";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherplatform(){
		//$sql="SElECT * From produit e inner join formationphp.produit a on e.idProduit= a.idProduit";
		$sql="SElECT * From platform";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	/*function calculerSalaire($produit){
		echo $produit->geturlImage() * $produit->getprix();
	}
	*/
	
	
	function supprimerplatform($id_plat){
		$sql="DELETE FROM platform where id_plat= :id_plat";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_plat',$id_plat);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierplatform($platform,$id_plat){
		$sql="UPDATE platform SET  name=:name,id_plat=:id_plat WHERE id_plat=:id_plat";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);

        $name=$platform->getname();
        $id_plat=$platform->getid_plat();
       
		$datas = array(':name'=>$name, ':id_plat'=>$id_plat);
		$req->bindValue(':name',$name);
		$req->bindValue(':id_plat',$id_plat);
		$req->bindValue(':id_plat',$id_plat);
		
		
            $s=$req->execute();
			
          // header('Location: products1.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererplatform($id_plat){
		$sql="SELECT * from platform where id_plat=$id_plat";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeplatforms($name){
		$sql="SELECT * from platform where name=$name";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>