<?php
$_SERVER['HTTPS'] = "on";

header('Content-type: text/html; charset=iso-8859-1');
session_start();
?>

<!DOCTYPE html>
Bienvenue sur la page 3 ! <br/>
Votre prénom : <?php echo $_SESSION['prenom'];?><br/>
Votre nom : <?php echo $_SESSION['nom'];?><br/>

<a href="index.php">Retour à l'accueil</a>