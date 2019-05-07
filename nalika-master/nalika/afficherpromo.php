<?php
  include "../../core/promoc.php";
  $query='';
  $query .= "SELECT saisons FROM promo ";
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE saisons LIKE "%'.$_POST["search"]["value"].'%"';
}

   
    $promo1C = new promoC();

   $promo1C->afficher($query);
  
?>