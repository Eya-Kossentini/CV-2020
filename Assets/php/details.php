<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <title> Details-Recruteurs</title>
    
</head>
<body>
<div class="header" style="position: relative;
    text-align: center;
    color: black;">
    <img class="headerImg" src="aquarelle.png" style="width:100%;  height: 20vh"/>
    <div class="centered" style=" position: absolute;
         top: 15%;
         left: 50%;
         font-size: 100px;
         font-family: 'Andalus';
         font-weight: bold;
         transform: translate(-50%, -50%);" ><br> Fiche du Recruteur</div>

</div>
<br><br><br><br>

<?php

include  "Connexion-BD.php";

$x=$_GET['i'];

$requete = " SELECT * FROM recruteur_info WHERE ID=$x";


$resultat = $mysqli->query($requete) or die ($mysqli->error());


echo "<br><br><table align='center' >";

while ($ligne= $resultat -> fetch_assoc())
{  
	echo '<tr><td>', 'ID= '.$ligne ["ID"].'</td>';
	echo '<tr><td>', 'Nom = '.$ligne ["Nom"].'</td>';
	echo '<tr><td>', 'Prenom= ' .$ligne ["Prenom"].'</td>';
    echo "<br>";
	echo '<tr><td>', 'Email= '.$ligne ["email"].'</td>';
    echo '<tr><td>', 'Profession= '.$ligne ["Profession"].'</td>';
    echo "<br>";
    echo '<tr><td>', 'Contact= '.$ligne ["Contact"].'</td>';
    echo "<br>";
    echo '<tr><td>', 'Adresse= '.$ligne ["Adresse"].'</td>';
    echo "<br>";
    echo '<tr><td>', 'Demande doffre= '.$ligne ["DemandeOffre"].'</td>';
   
}

echo "</table>";
echo "<br><br>";
?>


    <br><br><br><br><center><span class="introduction"><a href="affichage-recruteur.php"> Retour à la page des recruteurs</a></span></center><br>

