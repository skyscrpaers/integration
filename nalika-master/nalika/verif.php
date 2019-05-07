<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
// On récupère nos variables de session
if (isset($_SESSION['username']) && isset($_SESSION['pwd'])) 
{ 

	 echo 'Votre login est <b>'.$_SESSION['username'].'</b> <br>et votre mot de passe est <b>'.$_SESSION['username'].
	'</b><br>Votre role est : '.$_SESSION['pwd'].' <br/> Identifiant de la session est :'.session_id().'</br>'; 
	echo '<a href="product-Promotion.php">Cliquer pour se déconnecter</a>';

}

else { 
      echo 'Veuillez vous connecter </br>';  
	
}  
//définir la session une session est un tableau temporaire 
//1 er point c quoi une session
// 
?>