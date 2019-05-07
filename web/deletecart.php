<?PHP
include "../core/cartC.php";

$cartC=new cartC();
if (isset($_GET['nom'])){
	$cartC->deletecart($_GET['nom']);
	header('Location:dali.php');
}

?>