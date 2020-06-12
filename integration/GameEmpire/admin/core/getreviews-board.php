<?php
include("config.php");
function retrive(){
    $db = config::getConnexion();
    $sql = "select * from reviews";
    try{
        $list = $db->query($sql);
    }catch(Exception $e){
        echo "error";
    }
    $res = array();
        foreach($list as $row){
                array_push($res, $row);
        }
        return $res;
}
function convertStars($x){
    switch($x){
        case 1: return 20;
        break;
        case 2: return 40;
        break;
        case 3: return 60;
        break;
        case 4: return 80;
        break;
        case 5: return 100;
        break;
    }
}
function search($item, $mode){
    $db = new mysqli("localhost", "root", "", "game_empire");

    $sql = "select * from reviews where ".$mode."='".$item."';";

    $result = mysqli_query($db,$sql);
    $res = array();
        foreach($result as $row){
            array_push($res, $row);
        }
    $db->close();
    return $res;
}
$j=0;
if(!isset($_GET["q"])){
    $list = retrive();
}else{
    $list = search($_GET["text"], $_GET["select"]);
}
for($i=sizeof($list)-1; $i>=0; $i--){
    echo "<tr>
        <td> <a class='btn-link'>".$list[$i]["id_rev"]."</a> </td>
        <td> <span class='label label-success'><a class='btn-link'>".$list[$i]["username"]."</a></span>  </td>
        <td> <a class='btn-link'>".convertStars($list[$i]["nb_stars"])."</a> </td>
        <td>".$list[$i]["content"]."</td>
        <td>".$list[$i]["date"]."</td>
        <td>".$list[$i]["title"]."</td>
        <td> <span class='label label-success'>".$list[$i]["id_game"]."</span> </td>
        <td>
            <div class='dropleft'> <a class='btn-link' data-toggle='dropdown'><i class='fa fa-ellipsis-v'></i></a>
                <div class='dropdown-menu'> 
                <form action='../core/delete-review.php' method='post'>
                <input type='hidden' name='id_rev' value='".$list[$i]["id_rev"]."'>
                <input class='dropdown-item' type='submit' value='Delete'></form>
                </div>
            </div>
        </td>
    </tr>";
    $j++;
}
?>