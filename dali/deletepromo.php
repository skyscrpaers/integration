<?php
	include "../../core/promoc.php";
	promoC::supprimerpromo($_POST['Pref']);
	header("location:list_promotion.php");
?>