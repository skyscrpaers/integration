<?php
require_once "../core/cartC.php";
$panier=new cartC();
$panier->deletecart($_POST["nom"]);
require_once("dali.php")
?>
