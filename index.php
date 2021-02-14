<?php
$_SERVER['HTTPS'] = "on";

header('Content-type: text/html; charset=iso-8859-1'); //Permet l'affichage des accents dans le navigateur

session_start(); //Permet d'initialiser l'array session la première fois, ou d'en récupérer les valeurs

if(!isset($_SESSION['prenom']) AND !isset($_SESSION['nom']))  
{
    $_SESSION['prenom'] = '';
    $_SESSION['nom'] = '';
}

if(!isset($_COOKIE['prenom']) AND !isset($_COOKIE['nom'])) //Création de cookies lors de la première visite du site
{
    setcookie('prenom', $_SESSION['prenom'], time() + 365*24*3600,null, null, false, true);
    setcookie('nom', $_SESSION['nom'], time() + 365*24*3600, null, null, false, true);
}
?>

<!DOCTYPE html> 
<?php if($_SESSION['prenom'] == "" AND $_SESSION['nom'] == "") 
    {?>
        Veuillez entrer votre prénom et nom :<br/>
        <form action ="session.php" method="post"> <!--Attribution des valeurs des ID de session et des cookies-->
            <input type="text" name="prenom">
            <input type="text" name="nom">
            <input type="submit" value="Envoi des données">
        </form>
    <?php
    }

    if($_SESSION['prenom'] != "" AND $_SESSION['nom'] != "")
    {
        echo "Bienvenue à toi " . $_SESSION['prenom'] . " " . $_SESSION['nom'] . " ! <br/>";   
        echo "Votre adresse IP : " . $_SERVER['REMOTE_ADDR']; 
    }
?>
        
<br/>
        <a href="page2.php">Connexion avec cookies</a><br/> <!--Utilise les cookies pour se "connecter"-->
        <a href="page3.php">Connexion sans cookies</a><br/> <!--Utilise les ID de session-->
        <br/>
        <form action="session_end.php" method="post">
            <input type="submit" value="Fin de session">
        </form>
    </body>
</html>
    


