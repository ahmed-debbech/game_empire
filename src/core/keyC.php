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
    $sql="insert into report (code,username,idGame,date) values (:code,:username,:idGame,:date)";
    $db = config::getconnexion();
    try{
        $req=$db->prepare($sql);
        $code=$key->getCode();
        $username=$key->getUsername();
        $idGame=$key->getIdGame();
        $date=$key->getDate();
        $req->bindvalue(':code',$code);
        $req->bindvalue(':username',$username);
        $req->bindvalue(':idGame',$idGame);
        $req->bindvalue(':date',$date;

        $req->execute();
    }

    catch(Exception $e){
        echo'Error :'.$e->getMessage();
    }
}

?>