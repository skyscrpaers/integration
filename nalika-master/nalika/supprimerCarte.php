<?PHP
include "../../core/carteC.php";	
$carteC=new carteC();
if (isset($_POST["id_carte"])){
	$carteC->supprimercarte($_POST["id_carte"]);
//	header('Location: affichercarte.php');
}

?>
