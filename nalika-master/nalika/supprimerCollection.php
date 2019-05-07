<?php
	include "../../core/Categorie.php";
	CollectionR::supprimerCollection($_POST['id']);
	$id=$_POST['id'];
	header("location:category-list.php");
?>