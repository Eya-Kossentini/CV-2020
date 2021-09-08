<?php
//recupération de l'identifiant à supprimer
$ID=$_GET['id'];

//connexion à la BD
include "Connexion-BD.php";

//construction de la requête de suppression
$req2 = "DELETE FROM recruteur_info WHERE id =$ID";

//exécution de la requête de suppression
$resultat = $mysqli->query($req2) or die ('Erreur '.$req2.' '.$mysqli->error());



echo "<script> alert('Supprimé avec succés ! ! !') ; window.location='affichage-recruteur.php';</script>";
?>


<br><br><center><a href="affichage-recruteur.php">Revenir à la page des recuteurs </a></center><br>