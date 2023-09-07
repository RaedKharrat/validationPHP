
<?php  

include "../../entities/livraison.php";
include "../../core/livraisonC.php";

function rechercher($cin){

       $sql="SELECT * FROM livraison WHERE cin='".$cin."' ";
      $x = config::getInstance()->conn->query($sql);
      $s = $x->fetchAll();
      return $s;

}
?>