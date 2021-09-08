<?php
//commentaire 1: se connecter à la BD
include  "Connexion-BD.php";

//commentaire2: récupération des données du formulaire
$login=$_POST['login'];
$password=$_POST['password'];

//commentaire 3: construire la reqûete
$requete = "SELECT * FROM cnx WHERE login ='$login' and password='$password'";

//commentaire 4: exécution de la reqûete
//$resultat = $mysqli->query($requete) //or die ($mysqli->error());
$query = mysqli_query($mysqli, $requete );

if (mysqli_num_rows($query) == true){
	header("location:affichage-recruteur.php");
}
else { echo "<script> alert('Login ou Mot de passe incorrect ! ! !') ; window.location='Login.html';</script>";
}

//commentaire 5: vérification du résultat retourné
//if($ligne = $resultat->fetch_assoc())
   // echo "Bienvenue dans mon site";
//else echo "compte inexistant, vous devez vous inscrire <a href='inscription.html'> Sinscrire </a>";


?>




