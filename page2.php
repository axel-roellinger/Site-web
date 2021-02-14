<?php
$_SERVER['HTTPS'] = "on";

header('Content-type: text/html; charset=iso-8859-1');
session_start();
?>

<!DOCTYPE html>
Bienvenue sur la page 2 ! (Test avec les cookies)<br/><br/>

<?php 
if(!isset($_COOKIE['prenom']) AND !isset($_COOKIE['nom']))
{
    echo "Vous n'êtes pas identifié (aucun cookie)" . "<br/>";
    echo "<a href='index.php'> Retour à l'accueil </a>";
}

else
{
    echo "Votre prénom : " . $_COOKIE['prenom'] . "<br/>";
    echo "Votre nom : " . $_COOKIE['nom'] . "<br/>";    
    echo "<a href='index.php'> Retour à l'accueil </a>";
}

?>