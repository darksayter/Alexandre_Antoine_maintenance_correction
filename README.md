# Antoine_Alexandre_maintenance_correction
## R6.06 - Maintenance applicative

Correction du projet du groupe de Ethan et Florian.

--- 

## 📄 Description
Ce projet est une petite application web avec un système de connexion et d'inscription, développée en **PHP**.  
Les fonctionnalités principales sont :  
- Créer un compte utilisateur  
- Se connecter et se déconnecter   
- Gestion session de l'utilisateur

--- 
## ⚙️ Installation

1.  Dans un terminal, placez-vous dans le répertoire du projet et exécutez :

      ```docker compose up -d --build```

2. **Mettre à jour les informations de connexion**  
   - Modifiez le fichier `db.php` avec vos identifiants MySQL.

   - La configuration par défaut est la suivante : 
      - Nom de la base de données : ```testdb```
      - Utilisateur : ```testuser```
      - Mot de passe : ```testpass```
      - Mot de passe root : ```root```

2. **Lancer l’application**  
   - Accédez à [http://localhost/](http://localhost/) dans votre navigateur.
---
## 📂 Structure des fichiers
- `init.sql` : Script SQL pour créer la table des utilisateurs.
- `db_connect.php` : Fichier de connexion à la base de données.
- `compose.yaml` : Fichier de configuration du Docker Compose
- `index.php` : Page d'accueil.
- `login.php` : Page de connexion.
- `logout.php` : Page de déconnexion.
- `register.php` : Page d'inscription.
- `README.md` : Documentation du projet.

---

## 🔎 Détails des fichiers
### `init.sql`
Ce fichier contient les instructions SQL pour créer la table des utilisateurs.

### `db_connect.php`
Ce fichier gère la connexion à la base de données MySQL.

### `compose.yaml`
Ce fichier configure les services Docker pour une base de données MySQL et un serveur PHP-Apache.

### `index.php`
Page d'accueil avec un lien vers la page de connexion.

### `login.php`
Page de connexion où les utilisateurs peuvent entrer leurs identifiants et mots de passes haché, avec un lien vers la page de création.

### `register.php`
Page d'inscription où les utilisateurs peuvent créer un nouveau compte, avec un lien vers la page de connexion sécurisé.

### `logout.php`
Page de déconnexion qui supprime certaines informations de session et redirige vers la page d'accueil. 

--- 

## 🚀 Utilisation

1. **Page d'accueil** :  
   Accédez à `index.php` pour afficher la page d'accueil.

2. **Inscription** :  
   Utilisez `register.php` pour créer un nouveau compte utilisateur.

3. **Connexion** :  
   Utilisez `login.php` et connectez-vous avec les identifiants suivants :  
   - **Utilisateur :** `testuser`  
   - **Mot de passe :** `password123`

4. **Page après connexion** :  
   Une fois connecté, vous serez redirigé vers `index.php`.

5. **Déconnexion** :  
   Utilisez `logout.php` pour vous déconnecter.

---
