<?php
//connexion BD
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'db-covid';
$link = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_errno()) 
{
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

//affichage 
include  "connexion-BD.php";

// Check connection
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$nom = mysqli_real_escape_string($link, $_REQUEST['nom_prenom']);
$dateNaissance = mysqli_real_escape_string($link, $_REQUEST['date_de_naissance']);
$cin = mysqli_real_escape_string($link, $_REQUEST['cin']);
$telephone = mysqli_real_escape_string($link, $_REQUEST['num_telephone']);
$ville = mysqli_real_escape_string($link, $_REQUEST['ville']);
$postal = mysqli_real_escape_string($link, $_REQUEST['postal']);


// Attempt insert query execution
$sql = "INSERT INTO inscription (nom, dateNaissance, cin, telephone, ville, postal) VALUES ('$nom', '$dateNaissance', '$cin', '$telephone', '$ville', '$postal')";


if(mysqli_query($link, $sql))
   {
     echo "<div class='content'><h1> Records added successfully.</h1></div> <br><a href='Formulaire.html'>  Revenir à la page d'accueil </a>";
   }
   else
   {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
   }

// Close connection
mysqli_close($link);
header("Location:Questionnaire.html");


?>