<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<title> BD-Recruteurs</title>
	
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
         transform: translate(-50%, -50%);" ><br> Recruteurs inscrits</div>

</div>
<br><br><br><br>
<?php
include  "Connexion-BD.php";

//commentaire2: construction de la requête de sélection
$requete = "SELECT * FROM recruteur_info";

//commentaire3: exécution de la requête de sélection
$resultat = $mysqli->query($requete) or die ($mysqli->error());

//commentaire4: afficher le résultat de la sélection (les enregistrements de la base des données)?>

<table align="center" border="5" width="35%" cellspacing="10" >
	<tr align="center" style= "font-weight:bold;">
		<td>ID</td>
		<td>Nom</td>
		<td>Prenom</td>
		<td>Détails</td>
		<td>Suppression </td>
	</tr>

<?php
while($ligne = $resultat->fetch_assoc())
   {
	echo '<tr align="center" ><td>'.$ligne["ID"].'</td>'; 
	echo '<td>'.$ligne["Nom"].'</td>'; 
	echo '<td>'.$ligne["Prenom"].'</td>'; 
	echo '<td><a href=details.php?i='.$ligne["ID"].'>détails</a></td>';   
	echo '<td><a href=supprimer-cv.php?id='.$ligne["ID"].'>Supprimer</td></tr>';  
  }
 ?>
</table>


	<br><br><center><span class="introduction"><a href="CV.html"> Accueil</a></span></center><br>
				
		


