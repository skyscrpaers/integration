<?php
require_once ("../config/config.php");
include ("../entities/Commande.php");

class CommandeC
{
   public function ajouterCommande($com)
   {
   	$db=config::getConnexion();
   	$sql="INSERT INTO `commande` (`idcommande`, `dateCmd`, `idClient`, `totale`, `nbr`,`etatCmd`) VALUES (:idcommande,:dateCmd,:idClient,:totale,:nbr,:etatCmd);";
   	$req=$db->prepare($sql);
   	$req->bindValue(':idcommande',$com->getIdcommande());
   	$req->bindValue(':dateCmd',$com->getDateCmd());
   	$req->bindValue(':idClient',$com->getIdClient());
   	$req->bindValue(':totale',$com->getTotale());
   	$req->bindValue(':nbr',$com->getNbr());
    $req->bindValue(':etatCmd',$com->getEtatCmd());


   	$req->execute();



   }
   public  function recherchercommande($n)
 {

   /*$sql="SELECT * FROM `client` WHERE cin like '".$n."%' or nomclient like '".$n."%' or nomcommerce like '".$n."%' or telephone like '".$n."%'or mail like '".$n."%'";*/
   $sql="SELECT * FROM `commande` WHERE idClient = '".$n."' or idcommande ='".$n."' ";
         $connexion=config::getConnexion();
         $rep=$connexion->query($sql);

       $rep->execute();
           return $rep;

 }
   public function listCommande()
    {
      $sql='SELECT * FROM commande';
      $db = config::getConnexion();

        foreach  ($db->query($sql) as $row)
        {
          echo'<tr>

                                     <td>'.$row['idcommande'].'</td>
                                     <td>
                                         '.$row['dateCmd'].'
                                     </td>
                                     <td>
                                      '.$row['idClient'].'
                                     </td>
                                     <td>'.$row['nbr'].'</td>
                                       <td>'.$row['totale'].'</td>
                                         <td>'.$row['etatCmd'].'</td>
                                     <td>
                                     <form method="POST" action="commande-edit.php">
                                         <button type="submit" name="id" value="'.$row['idcommande'].'" id="'.$row['idcommande'].'" style=" padding: 5px 10px;font-size: 14px;border-radius: 3px;border: 1px solid rgba(0,0,0,.12);background: #152036;" class="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                     </form>
                                     </td>


                                  <td><form method="POST" action="supprimercommande.php">


                                     <button data-toggle="tooltip" name="idcommande" value="'.$row['idcommande'].'" style=" padding: 5px 10px;font-size: 14px;border-radius: 3px;border: 1px solid rgba(0,0,0,.12);background: #152036;" class="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                     </form>

                                     </td>


                                 </tr>';
        }


    }
  /*  public function getCommande($id)
    {
    	$db=config::getConnexion();
	    $sql="SELECT * FROM `commande` WHERE `idcommande` =".$id;
		$result= $db->query($sql);
		return $result;
	}*/

		public static function supprimercommande($idcommande)
   {

  $sql="DELETE FROM commande where idcommande=:idcommande";
    $db = config::getConnexion();
        $req=$db->prepare($sql);
    $req->bindValue(':idcommande',$idcommande);
    try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
/*	public function recupererDerniereCmd($id)
	{

       $db=config::getConnexion();
	    $sql="SELECT * FROM commande WHERE idCmd=(SELECT MAX(idCmd) FROM commande WHERE idClient=".$id.")";
        $result= $db->query($sql);
		return $result;

	}


 public function activercommande($idcommande)
      {


        $sql="UPDATE commande SET  etatCmd = 'activer' WHERE idcommande = '".$idcommande."' ";
          $connexion=config::getConnexion();
          $rep=$connexion->query($sql);
        $rep->execute();
      }
      public function desactivercommande($idcommande)
    {


    $sql="UPDATE commande SET  etatCmd = 'desactiver' WHERE idcommande = '".$idcommande."' ";
        $connexion=config::getConnexion();
        $rep=$connexion->query($sql);
      $rep->execute();
    }*/

    public static function  modifierCom($commande,$idcommande)
    {

      $sql="UPDATE commande SET  etatCmd=:etatCmd WHERE idcommande=:idcommande";

        $db = config::getConnexion();
      try{
            $req=$db->prepare($sql);

            $req->bindValue(':idcommande',$commande->getIdcommande());
          	$req->bindValue(':dateCmd',$commande->getDateCmd());
          	$req->bindValue(':idClient',$commande->getIdClient());
          	$req->bindValue(':totale',$commande->getTotale());
          	$req->bindValue(':nbr',$commande->getNbr());
           $req->bindValue(':etatCmd',$commande->getEtatCmd());
                $s=$req->execute();
            }
            catch (Exception $e){
                echo " Erreur ! ".$e->getMessage();
       echo " Les datas : " ;

            }

      }

    public static function recuperercommande($id)
  	{
  		$sql="SELECT * from commande where idcommande=?";
  		$db = config::getConnexion();
  		try{
  			$verif=$db->prepare($sql);
  			$verif->execute(array($id));
  		$liste=$verif->fetch();
  		return $liste;
  		}
          catch (Exception $e){
              die('Erreur: '.$e->getMessage());
          }
  	}
}
?>
