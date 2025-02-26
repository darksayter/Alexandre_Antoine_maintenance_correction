<?php
// Démarre une nouvelle session ou reprend une session existante
session_start();

// Inclut le fichier de connexion à la base de données
require 'db_connect.php';

// Initialisation des variables pour les messages d'erreur et de succès
$error = '';
$success = '';

// Vérifie si la méthode de la requête est POST (le formulaire a été soumis)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupère et nettoie les valeurs des champs du formulaire
    $inputUser = trim($_POST['username'] ?? '');
    $inputPass = trim($_POST['password'] ?? '');

    // Vérifie si les champs sont vides
    if ($inputUser === '' || $inputPass === '') {
        $error = "Veuillez remplir tous les champs.";
    } else {
        // Prépare une requête pour vérifier si le nom d'utilisateur existe déjà
        $check = $pdo->prepare("SELECT id FROM users WHERE username = :username");
        $check->execute(['username' => $inputUser]);
        $exists = $check->fetch();

        // Si le nom d'utilisateur existe déjà, affiche un message d'erreur
        if ($exists) {
            $error = "Le nom d'utilisateur existe déjà.";
        } else {
            // Prépare une requête pour insérer le nouvel utilisateur dans la base de données
            $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
            $stmt->execute([
                'username' => $inputUser,
                'password' => $inputPass
            ]);

            // Redirige vers la page de connexion avec un paramètre indiquant que l'inscription a réussi
            header('Location: login.php?registered=1');
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>

<body>
    <h1>S'inscrire</h1>

    <!-- Affiche un message d'erreur si nécessaire -->
    <?php if ($error): ?>
        <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>

    <!-- Formulaire d'inscription -->
    <form method="post" action="">
        <div>
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" name="username" id="username" required>
        </div>
        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="submit">S'inscrire</button>
    </form>

    <!-- Lien vers la page de connexion pour les utilisateurs déjà inscrits -->
    <p>Déjà inscrit ? <a href="login.php">Se connecter</a></p>
</body>

</html>