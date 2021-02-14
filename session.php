<?php
$_SERVER['HTTPS'] = "on";

session_start();
header('Content-type: text/html; charset=iso-8859-1');

if($_POST['prenom'] != '' AND $_POST['nom'] != '')
{    
    $_SESSION['prenom'] = $_POST['prenom'];
    $_SESSION['nom'] = $_POST['nom'];  
    
    setcookie('prenom', $_POST['prenom'], time() + 24*60*3600, null, null, true, false);
    setcookie('nom', $_POST['nom'], time() + 24*60*3600, null, null, true, false);

    header('Location: index.php');
    exit();
}
else
{
    echo "Vous n'êtes pas identifié" . '<br/>';
    echo "<a href='index.php'>" ;
    echo "Retourner à l'accueil";
    echo "</a>";
}
?>

