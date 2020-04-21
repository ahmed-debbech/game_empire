<?php
class config {
	private static $instance = NULL;
	public static function getConnexion() {
	       	if (!isset(self::$instance)) {
		self::$instance = new PDO('mysql:host=localhost;dbname=game_empire', 'root', '');
		}
	return self::$instance;
	}
}
$con=mysqli_connect("localhost","root","");

if (!$con) {
    echo("Not connected.");
}

$selectdb=mysqli_select_db($con,'game_empire');

if (!$selectdb) {
echo "BD Not Selected ";
}
?>
