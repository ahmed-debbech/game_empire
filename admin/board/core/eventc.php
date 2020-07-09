<?PHP
require "config.php";
class eventc {
function showEvent ($event){
		echo "Id event: ".$event->getIdEvent()."<br>";
		echo "Id org: ".$event->getIdOrg()."<br>";
		echo "Name: ".$event->getName()."<br>";
		echo "date_start: ".$event->getStart()."<br>";
		echo "date_end: ".$event->getEnd()."<br>";
		echo "Place: ".$event->getLoc()."<br>";
		
	}
	
	function addEvent()
{   
	$id_event=$event->getIdEvent();
	$id_org=$event->getIdOrg();
	$name=$event->getName();
	$date_start=$event->getStart();
	$date_end=$event->getEnd();
	$location=$event->getLoc();
	
	$sql="INSERT INTO event (id_event,id_org,name,date_start,date_end,location) values ('$id_event','$id_org','$name','$date_start','$date_end','$location')";
	$db = config::getConnexion();
	try{
	$req=$db->prepare($sql);

		$req->execute();
	   
	}
	catch (Exception $e){
		echo 'Erreur: '.$e->getMessage();
	}


}
	function showEvents(){
		
		$sql="SElECT * From event";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function deleteEvent($id_event){
		$sql="DELETE FROM event where id_event= :id_event";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_event',$id_event);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function editEvent($event,$id_event){
		$sql="UPDATE event SET id_event=:id_event1,id_org=:id_org, name=:name,date_start=:date_start,date_end=:date_end,location=:location WHERE id_event=:id_event";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_event1=$event->getIdEvent();
		$id_org=$event->getIdOrg();
        $name=$event->getName();
		$date_start=$event->getStart();
		$date_end=$event->getEnd();
		$location=$event->getlocation();
		
		$datas = array(':id_event1'=>$id_event1,':id_event'=>$id_event, ':id_org'=>$id_org, ':name'=>$name,':date_start'=>$date_start,':date_end'=>$date_end,':location'=>location);
		$req->bindValue(':id_org1',$id_org1);
		$req->bindValue(':id_org',$id_org);
		$req->bindValue(':name',$name);
		$req->bindValue(':date_start',$date_start);
		$req->bindValue(':date_end',$date_end);
		$req->bindValue(':location',$location);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " the datas : " ;
  print_r($datas);
        }
		
	}
	/*function backupevent($id_org){
		$sql="SELECT * from eventator where id_org=$id_org";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/
	
	function searchEvent($id_event){
		$sql="SELECT * from event where id_event=$id_event";
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