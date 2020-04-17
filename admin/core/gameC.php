<?PHP
include "../config.php";
class GameC
{
	

function addGame($game){
		$sql="insert into game (id_game,name,id_plat,release_date,category,price,score) values (:id_game,:name,:id_plat,:release_date,:category,:price,:score)";
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
		$req->bindValue(':id_game',$id_game);
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
	
	
}

?>
