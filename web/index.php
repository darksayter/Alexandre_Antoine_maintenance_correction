<?php
// Démarrage de la session
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>

<body>
    <h1>Page d'accueil</h1>

    <!-- Affichage du message de bienvenue ou des liens de connexion/inscription -->    
    <?php if (isset($_SESSION['username'])): ?>
        <p>Bonjour <?php echo htmlspecialchars($_SESSION['username']); ?> !</p>
        <p><a href="logout.php">Se déconnecter</a></p>
    <?php else: ?>
        <p>Vous n'êtes pas connecté.</p>
        <p><a href="login.php">Se connecter</a> | <a href="register.php">S'inscrire</a></p>
    <?php endif; ?>

</body>

</html>