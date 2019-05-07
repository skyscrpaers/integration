<?php
	include "../../core/promoc.php";
	include "../../entities/promo.php";
	
	$promo1 = new promo($_POST['Pref'],$_POST['discount'],$_POST['saisons'],"");
	$id=$_POST['id'];

	promoC::modifierpromo($promo1,$id);

	header("location:list_promotion.php");
?>