<?php  
session_start();



            include "../core/cartC.php";
            include"../entities/cart.php";
            if (isset($_GET['reference']))
            {
   $cartC=new cartC();
   $result=$cartC->recuperercart($_GET['reference']);
  foreach($result as $row){

  $login=$_SESSION['email'];    
  $nom=$row['nom'];
  $prix=$row['prix'];
  $quantite=$row['quantite'];
  $total=$prix*$quantite;

          
}
  echo 'eya';
   $cart1=new cart($login,$nom,$prix);
   $cart1C=new cartC();
   $cart1C->ajoutercart($cart1);
   header('Location: dali.php');
}
 ?> 