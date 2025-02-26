<?php
session_start();
session_destroy();
header('Location: index.php');
exit;
//La fonction session_destroy() détruit toutes les données associées à la session en cours.
//La fonction header() permet de rediriger l'utilisateur vers une autre page.
//La fonction exit() permet de stopper l'exécution du script.
//Dans ce cas, l'utilisateur est redirigé vers la page d'accueil après s'être déconnecté.
?>