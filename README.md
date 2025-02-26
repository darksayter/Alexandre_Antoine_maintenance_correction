# Hébergement et Test du Site Web avec Docker

## Prérequis

Avant de commencer, assurez-vous d'avoir installé les outils suivants sur votre machine :

- Docker

- Docker Compose

## Structure du projet

Le projet est organisé comme suit :

/
├── db/                 # Dossier pour la base de données MySQL
│   ├── Dockerfile      # Dockerfile pour créer l'image MySQL
│   ├── init.sql        # Script d'initialisation de la base de données
│
├── web/                # Dossier pour le site web
│   ├── db_connect.php  # Fichier de connexion à la base de données
│   ├── Dockerfile      # Dockerfile pour configurer PHP et Apache
│   ├── index.php       # Page d'accueil
│   ├── login.php       # Page de connexion
│   ├── logout.php      # Page de déconnexion
│   ├── register.php    # Page d'inscription
│
├── compose.yaml        # Fichier de configuration Docker Compose

## Description des services

### 1. Base de données (MySQL)

Le service db utilise l'image officielle MySQL 8.0 et est configuré avec :

Nom de la base de données : ```testdb```

Utilisateur : ```testuser```

Mot de passe : ```testpass```

Mot de passe root : ```root```

Le script init.sql est exécuté automatiquement lors de l'initialisation du conteneur.

### 2. Serveur Web (PHP + Apache)

Le service php-apache utilise une image basée sur php:8.1-apache et installe les extensions pdo et pdo_mysql nécessaires pour interagir avec MySQL.

Le serveur écoute sur le port 80 et le code source du site est monté dans le conteneur sous /var/www/html.

## Déploiement avec Docker Compose

### 1. Démarrer les services

Dans un terminal, placez-vous dans le répertoire du projet et exécutez :

```docker compose up -d --build```

Cela va :

- Construire les images Docker pour db et php-apache

- Lancer les conteneurs en arrière-plan (-d pour détaché)

### 2. Accéder au site web

Une fois les conteneurs démarrés, ouvrez votre navigateur et accédez à :

```http://localhost```

### 3. Accéder à MySQL

Pour se connecter à la base de données via un client MySQL :

```docker exec -it mysql-db mysql -utestuser -ptestpass testdb```

### 4. Arrêter les services

Pour arrêter et supprimer les conteneurs, exécutez :

```docker compose down```

