<?PHP
include "../../core/clientC.php";
$clientC=new clientC();
if (isset($_POST["id_client"])){
	$clientC->supprimerclient($_POST["id_client"]);
	header('Location:data-table.php');
}

?>
