<?PHP
require_once "../config/config.php";
//include "../entities/Commande.php";
class commandeCo {
function affichercommande ($commande){
		echo "idcommande: ".$commande->getIdcommande()."<br>";

		echo "date: ".$commande->getDateCmd()."<br>";
		echo "idclient: ".$commande->getIdClient()."<br>";
		echo "nbproduit: ".$commande->getNbr()."<br>";
			echo "totale: ".$commande->getTotale()."<br>";
	}

function ajoutercommande($com){

	$db=config::getConnexion();
	$sql="INSERT INTO `commande` (`dateCmd`, `idClient`, `totale`, `nbr`,`etatCmd`) VALUES (:dateCmd,:idClient,:totale,:nbr,:etatCmd);";
	$req=$db->prepare($sql);
	$req->bindValue(':dateCmd',$com->getDateCmd());
	$req->bindValue(':idClient',$com->getIdClient());
	$req->bindValue(':totale',$com->getTotale());
	$req->bindValue(':nbr',$com->getNbr());
	$req->bindValue(':etatCmd',$com->getEtatCmd());


	$req->execute();

	/*	$sql="INSERT into `commande` ( `dateCmd`, `idClient`, `totale`, `nbr`,`etatCmd`) values (:dateCmd,:idClient,:totale,:nbr,:etatCmd)";
		$db = config::getConnexion();
    $req=$db->prepare($sql);

    //    $idcommande=$commande->getidcommande();

        $dateCmd=$commande->getDateCmd();
        $idClient=$commande->getIdClient();
        $nbr=$commande->getNbr();
        $totale=$commande->getTotale();
				$etatCmd=$commande->getEtatCmd();

	//	$req->bindValue(':idcommande',$idcommande);

		$req->bindValue(':dateCmd',$dateCmd);
		$req->bindValue(':idClient',$idClient);
		$req->bindValue(':totale',$totale);
		$req->bindValue(':nbr',$nbr);
		$req->bindValue(':etatCmd',$etatCmd);

            $req->execute();
*/


	}

	public function recuperercommande($idcommande){
				$sqll="select * from commande where idcommande='".$idcommande."'";
				$connexion=config::getConnexion();
				$repp=$connexion->query($sqll);
				$donnees = $repp->fetch();
				echo $donnees['idcommande'];
				$h=$donnees['idcommande'];
				return $donnees;
				//echo $donnees['status'];


	}
	public function recupererid(){
				$sqll="SELECT idcommande FROM commande ORDER BY idcommande DESC LIMIT 0, 1";
				$connexion=config::getConnexion();
				$repp=$connexion->query($sqll);
				$donnees = $repp->fetch();
				echo $donnees['idcommande'];
				$h=$donnees['idcommande'];
				return $h;
				//echo $donnees['status'];


	}

	function nbProduits()
	{
						$connexion=config::getConnexion();
 						$res = $connexion->query('select count(*) as nb from cart');
						$data = $res->fetch();
						$nb = $data['nb'];
						return $nb;
	}


	public function supprimerpanier(){
				$sqll="DELETE FROM `cart` ";
				$connexion=config::getConnexion();
				$repp=$connexion->query($sqll);
				$repp->execute();






	}

	

}

?>
