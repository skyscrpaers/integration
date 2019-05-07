<?php
/**
*
*/
class commande
{
private $idcommande;
private $dateCmd;
private $idClient;
private $nbr;
private $totale;
private $etatCmd;



function __construct($dateCmd,$idClient,$totale,$nbr,$etatCmd)
{
//$this->idcommande=$idcommande;
$this->dateCmd=$dateCmd;
$this->idClient=$idClient;
$this->totale=$totale;
$this->nbr=$nbr;
$this->etatCmd=$etatCmd;

}

public function getIdcommande(){
		return $this->idcommande;
	}

public function setIdcommande($idcommande)
{
		$this->idcommande=$idcommande;
}

public function getDateCmd()
{
    return $this->dateCmd;
}

public function setDateCmd($dateCmd)
{
    $this->dateCmd = $dateCmd;
    return $this;
}
public function getIdClient()
{
    return $this->idClient;
}

public function setIdClient($idClient)
{
    $this->idClient = $idClient;
    return $this;
}
public function getTotale()
{
    return $this->totale;
}

public function setTotale($totale)
{
    $this->totale = $totale;
    return $this;
}

public function getEtatCmd()
{
    return $this->etatCmd;
}

public function setEtatCmd($etatCmd)
{
    $this->etatCmd = $etatCmd;
    return $this;
}
public function getNbr()
{
    return $this->nbr;
}

public function setNbr($nbr)
{
    $this->nbr = $nbr;
    return $this;
}



}
?>
