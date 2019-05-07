<?php
require_once "../core/cartC.php";
$panier=new cartC();
$panier->modifiercart($_POST["quantite"],$_POST["nom"]);
require_once("dali.php");
?>
