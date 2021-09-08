<?php

$user = 'root';
$password ='';
$database ='cv-info';
$port= NULL;

//connexion à la base des données
$mysqli = new mysqli("localhost", "root", "", "cv-info");

//nom serveur,nom utilisateur,password,nom de la BD
 if ($mysqli->connect_error) { die('Erreur de connexion ('.$mysqli->connect_errno.')'. $mysqli->connect_error); }


?>

