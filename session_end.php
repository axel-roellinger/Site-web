<!--Vide les ID de session-->
<?php
$_SERVER['HTTPS'] = "on";
session_start();
session_unset();
header('Location: index.php');
exit();
?>
