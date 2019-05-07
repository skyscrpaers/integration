<?PHP

include "../../entities/promo.php";
include "../../core/promoc.php";
if (isset($_POST['Pref']) and isset($_POST['saisons']) and isset($_POST['discount'])){
$promo1=new promo($_POST['Pref'],$_POST['saisons'],$_POST['discount']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$promo1C=new promoC();
$promo1C->ajouterpromo($promo1);
header('Location:product-Promotion.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>