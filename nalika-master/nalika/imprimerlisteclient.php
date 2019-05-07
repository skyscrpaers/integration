<?php
/**
 * Created by PhpStorm.
 * User: Boussoukaya
 * Date: 21/04/2018
 * Time: 23:51
 */

include 'pdf/mc_table.php';
//$id=$_POST["cin"];
$e=0;
$i=0;
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Times","I",12);
$pdf->SetTextColor(124,112,103);
$pdf->MultiCell(0,10,"\n\n\n\n Liste des Utilisateurs: \n\n");
$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Times","",12);
$dbConnection = mysqli_connect('localhost', 'root', '', 'projet2a');

$query  = "SELECT * FROM client";
$result = mysqli_query($dbConnection, $query);

if (mysqli_num_rows($result) > 0) {
  $pdf->Cell(30,10,"Prenom",1,0);
  $pdf->Cell(25,10,"Nom",1,0);
  $pdf->Cell(50,10,"Numero Telephone",1,0);
  $pdf->Cell(50,10,"Adresse mail",1,0);
  $pdf->Cell(35,10,"Date de naissance",1,1);



    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

        $prenom = $row['prenom'];
        $nom = $row['nom'];
        $numtel = $row['numtel'];
        $email=$row['email'];
        $date=$row['date'];
        if($e==0)
        {

        $pdf->Cell(30,10,"{$prenom} ",1,0);
        $pdf->Cell(25,10,"{$nom} ",1,0);
        $pdf->Cell(50,10,"{$numtel} ",1,0);
        $pdf->Cell(50,10,"{$email} ",1,0);
        $pdf->Cell(35,10,"{$date} ",1,1);


        }



    } }


$pdf->SetFont("Courier","B",9);

$pdf->output("ListeClients.pdf","");


header("Content-Type: application/pdf");
header("Content-Disposition: attachment;filename=ListeClients.pdf");
readfile("ListeClients.pdf");
unlink("ListeClients.pdf");
