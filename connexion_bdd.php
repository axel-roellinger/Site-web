<?php
header('Content-type: text/html; charset=iso-8859-1');

// Sous MAMP : connexion à la BDD
try /*Tentative de connexion*/
{
$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e) /*En cas d'erreur*/
{
        die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT ID, nom, possesseur, console, prix, nbre_joueurs_max, commentaires FROM jeux_video');

while($donnees = $reponse->fetch(PDO::FETCH_ASSOC))
{
?>
    <p>
        <strong>Jeu</strong> : <?php echo $donnees['nom']; ?> <br/>
        Le possesseur de ce jeu est <?php echo $donnees['possesseur']; ?>. <br/>
        Le jeu est à vendre pour <?php echo $donnees['prix']; ?> euros.<br/>
        Le jeu fonctionne sur <?php echo $donnees['console']; ?><br/>
        Nombre de joueurs max : <?php echo $donnees['nbre_joueurs_max']; ?> joueur(s). <br/>
        Commentaire du propriétaire : <em><?php echo $donnees['commentaires'];?></em>
    </p>

<?php

}

$reponse->closeCursor(); //Termine le traitement de la requête

?>