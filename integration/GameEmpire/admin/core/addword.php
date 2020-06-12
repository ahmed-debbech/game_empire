<?php
$link = mysqli_connect("127.0.0.1", "root", "", "game_empire");
$sql = "insert into bad_words (word) values ('".$_GET["newword"]."')";
if($res = mysqli_query($link,$sql)){
    header("Location: ". $_SERVER['HTTP_REFERER']);
}else{
    echo "could not add";
}
?>