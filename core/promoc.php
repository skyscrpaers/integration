<?PHP
require_once "../../config/config.php";
class promoC {
/*function afficher($promo){
		echo "Code: ".$promo>getCode()."<br>";
		echo "Title: ".$promo->getTitle()."<br>";
		echo "Discount: ".$promo->getDiscount()."<br>";
		echo "Price: ".$promo->getPrice()."<br>";
		//fecho "New price: ".$promo->getNewprice()."<br>";
	}*/
	/*function calculer($promo){
		echo $promo->getPrice() -($promo->getprice() * ($promo->getDiscount() / 100));
	}*/
	public static function ajouterpromo ($promo)
	{
        $Pref=$promo->getPref();
      
      
        $discount=$promo->getSaisons();
        $saisons=$promo->getDiscount();
      
      	$bdd = config::getConnexion();
        $insertmbr = $bdd->prepare('INSERT INTO promo (Pref,discount,saisons) VALUES(?,?,?)');
        $insertmbr->execute(array($Pref,$discount,$saisons));
	}

	function afficher()
	{
	$sql='SELECT Pref,prix,nom,discount,saisons FROM promo inner join produit on promo.Pref=produit.ref';
		$db = config::getConnexion();
	
				foreach  ($db->query($sql) as $row)
				{
					
					echo'<tr>
                                   
                                    <td>'.$row['Pref'].'</td>
 <td>'.$row['nom'].'</td>
                                <td>'.$row['prix'].'</td>
                                    <td>'.$row['discount'].'</td>
                                     <td>'.$row['saisons'].'</td>
                                    <td> '.number_format($row['prix'] - ( $row['prix'] * ($row['discount'] / 100))).'</td>
                                    <td>
                                    <form method="POST" action="product-Promotion.php">
                                        <button type="submit" name="id" value="'.$row['Pref'].'" id="'.$row['Pref'].'" style=" padding: 5px 10px;font-size: 14px;border-radius: 3px;border: 1px solid rgba(0,0,0,.12);background: #152036;" class="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </form>    
                                    </td>
                                    <td><button data-toggle="tooltip" name="delete" id="'.$row['Pref'].'" style="padding: 5px 10px;font-size: 14px;border-radius: 3px;border: 1px solid rgba(0,0,0,.12);background: #152036;" class="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
                                </tr>';			
				}
				
	}
	public static function recuperer($id) 
	{
		$sql="SELECT * from promo where Pref=?";
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
		public static function supprimerpromo($id){
		$sql="DELETE FROM promo where Pref=:id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

		
	public static function modifierpromo($promo,$id){
		$sql="UPDATE promo SET Pref = :Pref , discount = :discount , saisons=:saisons WHERE Pref = :id";
		
		$db = config::getConnexion();
	try{		
        $req=$db->prepare($sql);
        $Pref=$promo->getPref();
       
        $saisons=$promo->getSaisons();
        $discount=$promo->getDiscount();
        $datas = array(':Pref'=>$Pref , ':discount'=>$saisons , ':saisons'=>$discount);
		$req->bindValue(':id',$id);
		$req->bindValue(':Pref',$Pref);
		$req->bindValue(':discount',$discount);
		$req->bindValue(':saisons',$saisons);
		
		
            $s=$req->execute();
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	
	
}
?>