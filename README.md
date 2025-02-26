# Antoine_Alexandre_maintenance_correction_groupe_Ethan_Florian 
## R6.06 - Maintenance applicative

Petit projet web avec un formulaire de connexion/création et un **bug caché** à résoudre.  
Un autre groupe sera chargé de découvrir et corriger ce bug.  

--- 

## 📄 Description
Ce projet est une petite application web avec un système de connexion et d'inscription, développée en **PHP**.  
Les fonctionnalités principales sont :  
- Créer un compte utilisateur  
- Se connecter et se déconnecter   
- Gestion session de l'utilisateur

Un **bug caché** se trouve dans le projet, et un autre groupe devra le détecter et le corriger !

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
- `database.sql` : Script SQL pour créer la base de données et la table des utilisateurs.
- `db.php` : Fichier de connexion à la base de données.
- `home.php` : Page d'accueil après connexion.
- `index.php` : Page d'accueil.
- `login.php` : Page de connexion.
- `logout.php` : Page de déconnexion.
- `register.php` : Page d'inscription.
- `README.md` : Documentation du projet.

---
## 🔎 Détails des fichiers
### `database.sql`
Ce fichier contient les instructions SQL pour créer la base de données et la table des utilisateurs, ainsi que pour insérer un utilisateur de test.

### `db.php`
Ce fichier gère la connexion à la base de données MySQL.

### `index.php`
Page d'accueil avec un lien vers la page de connexion.

### `login.php`
Page de connexion où les utilisateurs peuvent entrer leurs identifiants, avec un lien vers la page de création.

### `register.php`
Page d'inscription où les utilisateurs peuvent créer un nouveau compte, avec un lien vers la page de connexion.

### `home.php`
Page d'accueil après connexion, affichant un message de bienvenue.

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
   Une fois connecté, vous serez redirigé vers `home.php`.

5. **Déconnexion** :  
   Utilisez `logout.php` pour vous déconnecter.

---
