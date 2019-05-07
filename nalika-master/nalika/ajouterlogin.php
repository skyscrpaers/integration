<?php 
    session_start(); // On démarre la session AVANT toute chose 

    if(isset($_POST['l_login_btn']))
    {

      include('../../core/AdminC.php');

      $connection = false;

      $Adminc = new AdminC();
      $tab = $Adminc->afficher();
      foreach($tab as $row)
      {
        if($_POST['l_username']==$row['username'] && $_POST['l_pwd']==$row['pwd'])
        {
          $_SESSION['id'] = $row['id']; 
          $_SESSION['email'] = $row['email']; 
          $_SESSION['username'] = $row['username']; 
          $_SESSION['pwd'] = $row['pwd'];
          $_SESSION['role'] = $row['role']; 
          header('Location:list_promotion.php');
          $connection = true;
        }
      }
      if($connection==false)
      {
        //header('Location: login.php');
        echo "mot de passe ou user name non valide";
      }
    }

    
  
?> 