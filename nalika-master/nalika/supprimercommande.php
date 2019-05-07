<?php
	require_once ("../../core/CommandeC.php");
	$commande=new CommandeC();
	if(isset($_POST['idcommande']))
	$commande->supprimercommande($_POST["idcommande"]);
require_once("index-1.php");
	?>
