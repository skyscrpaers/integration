<?PHP
require('../config/config.php');
include "../entities/carte.php";
include "../core/carteC.php";
$carte1=new carte($_POST['id_c']);
$carte1C=new carteC();
$carte1C->ajouter($carte1);
header('location:card.php');
?>
