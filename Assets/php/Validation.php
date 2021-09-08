<?php
//recupération de l'identifiant à supprimer
$IDDD =$_GET['id'];

//connexion à la BD
include "Connexion-BD.php";

//construction de la requête de suppression
$req2 = "DELETE FROM recruteur_info WHERE id ='$IDDD'";

//exécution de la requête de suppression
$mysqli->query($req2) or die ('Erreur '.$req2.' '.$mysqli->error());

echo "Validation avec succés";

?>

<!--<table align="center">
		<tr><td align="center"><a href="afficher.php">Afficher les données </a></td></tr>	
</table>-->
