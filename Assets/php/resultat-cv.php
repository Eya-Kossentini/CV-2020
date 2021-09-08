<?php
//commentaire1: connexion à la BD
include  "Connexion-BD.php";

//commentaire2: récupération des données du formulaire
$N=$_POST['Nom'];
$P=$_POST['Prenom'];
$e=$_POST['email'];
$Pr=$_POST['Profession'];
$C=$_POST['Contact'];
$A=$_POST['adresse'];
$D=$_POST['DemandeOffre'];

//commentaire3: construction de la requête d'insertion dans la table contact ayant les champs: Nom, Prenom, email
$requete = "INSERT INTO recruteur_info (Nom, Prenom, email, Profession, Contact, Adresse, DemandeOffre) VALUES ('$N','$P','$e', '$Pr', '$C', '$A', '$D')";
echo "<br>";
//echo $requete;
//commentaire4: exécution de la requête d'insertion
$resultat = $mysqli->query($requete) or die ($mysqli->error);

header('location: Contact.html');

?>



