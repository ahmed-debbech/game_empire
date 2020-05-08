<?PHP
//core
include "../config.php";
class ReportC {
function afficherReport($report){
		echo "Id: ".$report->getId()."<br>";
		echo "Username: ".$report->getUsername()."<br>";
		echo "Date: ".$report->getDate()."<br>";
		echo "Text: ".$report->getText()."<br>";
		echo "Topic: ".$report->getTopic()."<br>";
    }
    
function ajouterReport($report){
    $sql="insert into report (id,username,date,text,topic) values (:id,:username,:date,:text,:topic)";
    $db = config::getconnexion();
    try{
        $req=$db->prepare($sql);
        $id=$report->getId();
        $username=$report->getUsername();
        $date=$report->getDate();
        $text=$report->getText();
        $topic=$report->getTopic();
        $req->bindvalue(':cin',$cin);
        $req->bindvalue(':username',$username);
        $req->bindvalue(':date',$date);
        $req->bindvalue(':text',$text);
        $req->bindvalue(':topic',$topic);

        $req->execute();
    }

    catch(Exception $e){
        echo'Error :'.$e->getMessage();
    }
}

?>