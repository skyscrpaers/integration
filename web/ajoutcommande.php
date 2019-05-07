<?PHP









session_start();
$quantite='0';
$t='0';

  include "../core/orderC.php";
           include"../entities/order.php";
            if (isset($_GET['login']))
            {
      $orderC=new orderC();
      $result=$orderC->recupererorder($_GET['login']);
      foreach($result as $row){
           $name=$_SESSION["nom"];
           $quantite=$row['quantite']+$quantite;
           $t=($row['prix']*$row['quantite'])+$t;
           echo 'eya';

}
   $order1=new order($name,$quantite,$t);
   $order1C=new orderC();
   $order1C->ajouterorder($order1);




//echo $ll;
//echo "hichel";

/*function uniq_rand($min,$max,$tab)
{
    do $rand=rand($min,$max); while(in_array($rand,$tab));
    return $rand;
}
$image = array();
for($i=1;$i<6;$i++)
    $idcommande = uniq_rand(1,80,$image);*/
/*$tab = array();
do $idcommande=rand(1,30);
while(in_array($idcommande,$tab));
 */
//$commande1=new commande($_POST['idcommande'],$_POST['ref'],$date,$_POST['cin'],$_POST['idproduit']);



/* if (isset($_GET['reference']))
            {
   $cartC=new cartC();
   $result=$cartC->recuperercart($_GET['reference']);
  foreach($result as $row){
   $dateCmd=date('Y-m-d');
  $prix=$row['prix'];
  $quantite=$row['quantite'];
$total=number_format($row['prix']* $row['quantite']);
$etatCmd="activer";
$idClient=$_SESSION['email'];
$nb= new commandeCo();
$nbb=$nb->nbProduits();
}
$commande1=new commande($dateCmd,$idClient,$nbb,$total,$etatCmd);


$commandeC=new commandeCo();
$commandeC->ajoutercommande($commande1);
$k= new commandeCo();
$idcommande=$k->recupererid();

/////////////////////////




$p=new commandeCo();
$p->supprimerpanier();
 echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Votre commande a été enregistré avec
                <strong class='green'>succès</strong>
                </center></div>";

                 echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Avec un totale
                <strong class='green'>".$ll."DT"."</strong>
                </center></div>";





//echo "ghbnj,k;";
//$commandeC->affichercommande($commande1);
require_once("produits.php");



//header('Location: afficherEmploye.php');

}*/
echo "<div class='alert alert-block alert-success'>
                   <button type='button' class='close' data-dismiss='alert'>
                       <i class='ace-icon fa fa-times'></i>
                        </button>
                       <i class='ace-icon fa fa-check green'></i>
              <center>Votre commande a été enregistré avec
               <strong class='green'>succès</strong>
               </center></div>";

                echo "<div class='alert alert-block alert-success'>
                   <button type='button' class='close' data-dismiss='alert'>
                       <i class='ace-icon fa fa-times'></i>
                        </button>
                       <i class='ace-icon fa fa-check green'></i>
              <center>Avec un totale
               <strong class='green'>".$ll."DT"."</strong>
               </center></div>";
require_once("dali.php");
}
?>
