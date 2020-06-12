<?PHP
if(!isset($_SESSION)){
  ob_start();
  session_start();
}
include "../core/CartC.php";
$cartC=new cartC();
echo $_POST["quantity"];
echo $_POST["game_name"];
if (isset($_POST["update_cart"]) ) {

        foreach ($_POST['game_name'] as $index => $id) {
            $cartC->modifyCart($_POST["quantity"][$index],$_POST["game_name"][$index]);
                  }
                  header('Location: ../store-cart.php');
                }
                
        if(isset($_GET['act']) && $_GET['act']=='delete'){
          $game_name=$_GET['id'];
          $cartC->deleteCart($game_name);
          header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
?>