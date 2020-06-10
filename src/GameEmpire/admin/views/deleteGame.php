<!DOCTYPE html>
<html>
<head>
    <title></title>
          <script src="dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="dist/sweetalert.css">
</head>
<body>

</body>
</html>

<?PHP
include "../config.php";
if (isset($_GET['delete']))
{
	$id23=$_GET['delete'];
	$sql="DELETE FROM game WHERE id_game= '$id23' ";
	$sql2="DELETE FROM image WHERE id_game= '$id23' ";
	$sql3="DELETE FROM favourite WHERE id_game= '$id23' ";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->execute();
        $req=$db->prepare($sql2);
        $req->execute();
        $req=$db->prepare($sql3);
        $req->execute();
        if ($req->execute())
        {
            header("Location: products.php?del=1");
            exit();
        }
        else
        {
            header("Location: products.php?del=0");
            exit();
        }
		
}




