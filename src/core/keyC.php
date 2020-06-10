<?PHP
//core
include "../config.php";
class KeyC {
function afficherKey($key){
		echo "Code: ".$key->getCode()."<br>";
		echo "Username: ".$key->getUsername()."<br>";
		echo "idGame: ".$key->getIdGame()."<br>";
		echo "Date: ".$key->getDate()."<br>";
	
    }
    
function ajouterKey($key){
    $sql="insert into keyy (key_code,username,id_game,date) values (:key_code,:username,:id_game,:date);";
    $db = config::getconnexion();
    try{
        $req=$db->prepare($sql);
        $code=$key->getCode();
        $username=$key->getUsername();
        $idGame=$key->getIdGame();
        $date=$key->getDate();
        $req->bindvalue(':key_code',$code);
        $req->bindvalue(':username',$username);
        echo $username;
        $req->bindvalue(':id_game',$idGame);
        echo $idGame;
        $req->bindvalue(':date',$date);
        echo $date;
        if($req->execute()){
            echo "yoo";
        }else{
            echo "no";
        }
    }

    catch(Exception $e){
        echo'Error :'.$e->getMessage();
    }
}
}
?>