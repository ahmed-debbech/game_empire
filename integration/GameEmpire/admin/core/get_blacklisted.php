<?php
include("config.php");
function retrive(){
    $db = config::getConnexion();
    $sql = "select * from bad_words";
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
function search($item){
    $db = new mysqli("localhost", "root", "", "game_empire");

    $sql = "select * from bad_words where word='".$item."';";

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
    $list = search($_GET["text"]);
}
for($i=sizeof($list)-1; $i>=0; $i--){
    echo "<tr>
        <td> <a class='btn-link'>".$list[$i]["word"]."</a> </td>
        <td>
            <div class='dropleft'> <a class='btn-link' data-toggle='dropdown'><i class='fa fa-ellipsis-v'></i></a>
                <div class='dropdown-menu'> 
                <form action='../core/delete_word.php' method='post'>
                <input type='hidden' name='id_rev' value='".$list[$i]["word"]."'>
                <input class='dropdown-item' type='submit' value='Delete'></form>
                </div>
            </div>
        </td>
    </tr>";
    $j++;
}
?>