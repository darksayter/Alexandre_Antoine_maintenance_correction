<?php
// Démarre une nouvelle session ou reprend une session existante
session_start();

// Inclut le fichier de connexion à la base de données
require 'db_connect.php';

// Initialise la variable d'erreur
$error = '';

// Vérifie si la méthode de la requête est POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupère et nettoie les données du formulaire
    $inputUser = trim($_POST['username'] ?? '');
    $inputPass = trim($_POST['password'] ?? '');

    // Prépare une requête SQL pour sélectionner l'utilisateur avec le nom d'utilisateur fourni
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    // Exécute la requête avec le nom d'utilisateur fourni
    $stmt->execute(['username' => $inputUser]);
    // Récupère l'utilisateur correspondant
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Vérifie si l'utilisateur existe
    if ($user) {
        // Vérifie le mot de passe 
        if (password_verify($inputPass, $user['password'])) {
            // Stocke le nom d'utilisateur dans la session
            $_SESSION['username'] = $user['username'];
            // Redirige vers la page d'accueil
            header('Location: index.php');
            exit;
        } else {
            // Définit un message d'erreur si le mot de passe est incorrect
            $error = "Mot de passe incorrect.";
        }
    } else {
        // Définit un message d'erreur si l'utilisateur n'est pas trouvé
        $error = "Utilisateur introuvable.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>

<body>
    <h1>Se connecter</h1>

    <!-- Affiche le message d'erreur s'il y en a un -->
    <?php if ($error): ?>
        <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>

    <!-- Formulaire de connexion -->
    <form method="post" action="">
        <div>
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" name="username" id="username" required>
        </div>
        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="submit">Connexion</button>
    </form>

    <!-- Lien vers la page de création de compte -->
    <p>Pas encore inscrit ? <a href="register.php">Créer un compte</a></p>
</body>

</html>