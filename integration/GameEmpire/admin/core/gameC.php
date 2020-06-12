<?PHP
include "../config.php";
class GameC
{
	

	function addGame($game){
			$sql="insert into game (id_game,name,id_plat,release_date,category,price,solde,score,trailer) values (:id_game,:name,:id_plat,:release_date,:category,:price,:solde,:score,:trailer)";
			$db = config::getConnexion();
			try{
	        $req=$db->prepare($sql);
	        $id_game=$game->getId_game();
	        $name=$game->getName();
	        $id_plat=$game->getId_plat();
	        $release_date=$game->getRelease_date();
	        $category=$game->getCategory();
	        $price=$game->getPrice();
	        $solde=$game->getSolde();
	        $score=$game->getScore();
	        $trailer=$game->getTrailer();
			$req->bindValue(':id_game',$id_game);
			$req->bindValue(':name',$name);
			$req->bindValue(':id_plat',$id_plat);
			$req->bindValue(':release_date',$release_date);
			$req->bindValue(':category',$category);
			$req->bindValue(':price',$price);
			$req->bindValue(':solde',$solde);
			$req->bindValue(':score',$score);
			$req->bindValue(':trailer',$trailer);
			
	            $req->execute();


	           
	        }
	        catch (Exception $e){
	            echo 'Erreur: '.$e->getMessage();
	        }
			
		}
		function deleteGame($id_game){
		$sql="DELETE FROM game where id_game= :id_game";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_game',$id_game);
		try{
            $req->execute();
        }
        catch (Exception $e)
        	{
            die('Erreur: '.$e->getMessage());
        	}
		}
		
		

	function editGame($id,$game){
			$sql="UPDATE game SET (name,id_plat,release_date,category,price,score) values (:name,:id_plat,:release_date,:category,:price,:score) where id='$id'";
			$db = config::getConnexion();
			try{
	        $req=$db->prepare($sql);
	        $id_game=$game->getId_game();
	        $name=$game->getName();
	        $id_plat=$game->getId_plat();
	        $release_date=$game->getRelease_date();
	        $category=$game->getCategory();
	        $price=$game->getPrice();
	        $score=$game->getScore();
			$req->bindValue(':name',$name);
			$req->bindValue(':id_plat',$id_plat);
			$req->bindValue(':release_date',$release_date);
			$req->bindValue(':category',$category);
			$req->bindValue(':price',$price);
			$req->bindValue(':score',$score);
			
	            $req->execute();


	           
	        }
	        catch (Exception $e){
	            echo 'Erreur: '.$e->getMessage();
	        }
			
		}

	function showGame(){
		$sql="select * From game";
		$db = config::getConnexion();
		try{
			$req = $db->prepare($sql);
			$req->execute();
			$liste = $req->fetchAll();
			return $liste;
		}
	    catch (Exception $e){
	        die('Erreur: '.$e->getMessage());
	    }	
	}
	function showImage(){ 
                $query = "SELECT * FROM image ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
                 
	}
	

}

?>
