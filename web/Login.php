<?php
include "../core/clientC.php";
$host="localhost";
$user="root";
$password="";
$db="projet2a";

$con = mysqli_connect($host,$user,$password,$db);
if(isset($_POST['email'])){

    $sql="select * from client where email='".$_POST['email']."'AND mdp='".$_POST['mdp']."' limit 1";

    $result1=mysqli_query($con,$sql);

    if(!$result1 || mysqli_num_rows($result1) == 1)
    {
        session_start();
        $_SESSION['email']=$_POST['email'];
        $retrive=mysqli_fetch_array($result1);
        //print_r($retrive);
        $id=$retrive['id_client'];
        $_SESSION['nom']=$retrive['nom'];
        $_SESSION['prenom']=$retrive['prenom'];
        $date=$retrive['date'];
        $mdp=$retrive['mdp'];
        $numtel=$retrive['numtel'];

        if (substr($_SESSION['email'],0,4) == 'info')
        {
          header("location:../nalika-master/nalika/index.php");
          exit();
        }else
        {
          header("location:index.php");
          exit();
        }

    }
    else{
        echo "You Have Entered An Incorrect Password";
        exit();
    }

   }
?>
