<?php
//commentaire1: connexion à la BD
include  "Connexion-BD.php";

//commentaire2: récupération des données du formulaire
$login=$_POST['login'];
$password=$_POST['password'];

//commentaire3: construction de la requête d'insertion dans la table contact ayant les champs: Nom, Prenom, email
$requete = "INSERT INTO cnx (login,password) VALUES ('$login','$password')";

//echo $requete;
//commentaire4: exécution de la requête d'insertion
$resultat = $mysqli->query($requete) or die ($mysqli->error());
echo "Insertion faite avec succès<br><br>";

?>
<br><br><center><a href="Login.html">revenir à la page d'accueil</a></center><br>

