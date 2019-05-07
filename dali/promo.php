<?PHP
class promo{
	private $Pref;

	private $discount;
	private $saisons;

	function __construct($Pref,$discount,$saisons){
			$this->Pref=$Pref;
		
		$this->discount=$discount;
		
$this->saisons=$saisons;

	}
	
	function getPref(){
		return $this->Pref;
	}

	function getSaisons(){
		return $this->saisons;
	}
	function getDiscount(){
		return $this->discount;
	}

function setPref($Pref){
		$this->Pref=$Pref;
	}

	function setSaisons($saisons){
		$this->saisons=$saisons;
	}
	function setDiscount($discount){
		$this->discount=$discount;
	}


	
}

?>