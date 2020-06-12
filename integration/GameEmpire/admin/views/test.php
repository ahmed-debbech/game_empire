<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
<!-- Mirrored from themelooks.net/demo/dadmin/html/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Apr 2020 19:11:44 GMT -->

<head>

    <title>Dashboard - DAdmin</title>


<body>
  <?php
  include "../core/gameC.php";
                            $query = "SELECT name FROM image";  
                            $db2 = config::getConnexion();
                            $req2 = $db2->prepare($query);
                            $req2->execute();
                            $liste2 = $req2->fetchAll(); 
                            foreach($liste2 as $row){
                                echo'
                             
                                      <tr>  
                                           <td>  
                                                <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                                           </td>  
                                      </tr>  
                                 ';
                            }
                            ?>
</body>

</html>