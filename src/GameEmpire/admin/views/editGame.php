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
include "../entities/Game.php";
include "../core/GameC.php";


echo $_GET['id_plat'];
                             
if (isset($_GET['id_game']) and isset($_GET['name'])   and isset($_GET['id_plat']) and isset($_GET['release_date']) and isset($_GET['category']) and isset($_GET['price']) and isset($_GET['score']) and isset($_GET['trailer']))
{
        $game1=new Game($_GET['id_game'],$_GET['name'],$_GET['id_plat'],$_GET['release_date'],$_GET['category'],$_GET['price'],$_GET['solde'],$_GET['score'],$_GET['trailer']);
        $game1C=new GameC();
        $id_game=$_GET['id_game'];
        $name=$_GET['name'];
        $id_plat=$_GET['id_plat'];
        $release_date=$_GET['release_date'];
        $category=$_GET['category'];
        $price=$_GET['price'];
        $solde=$_GET['solde'];
        $score=$_GET['score'];
        $trailer=$_GET['trailer'];
        $sql="UPDATE game SET name='$name',release_date='$release_date',category='$category',price='$price',solde='$solde',score='$score',id_plat='$id_plat',trailer='$trailer' where id_game='$id_game'";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        if($req->execute())
        {
            header("Location: products.php?edit=1");
            exit();
        }
        else
        {
            header("Location: products.php?edit=0");
            exit();
        }
}
?>
