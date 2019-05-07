<?PHP
ob_start();
include "../../core/photoCore.php";
include"product-detail.php";
 $photoCore1 = new PhotoCore();
if(isset($_POST["id"]))
{
$connect = mysqli_connect("localhost", "root", "", "projet2a");

        $photoCore1->delete($connect,$_POST["id"]);
 	header('Location: afficher.php');
 }
?>
