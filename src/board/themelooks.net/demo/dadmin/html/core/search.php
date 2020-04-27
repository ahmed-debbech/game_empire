<?php
function search($item, $mode){
    $db = new mysqli("localhost", "root", "", "game_empire");

    $sql = "select * from reviews where ".$mode."='".$item."';";

    $result = mysql_query($sql);
    var_dump($result);
    $db->close();
    mysql_fetch_row($result)
    header("Location: ". $_SERVER['HTTP_REFERER']);
}
search($_GET["text"], $_GET["select"]);
?>