# Application de Gestion des Stagiaires

Cette application PHP permet de gérer les stagiaires dans une entreprise. Elle offre les fonctionnalités suivantes :

- Enregistrement des informations des stagiaires (nom, prénom, date de début, etc.).
- Consultation de la liste des stagiaires.
- Modification et suppression des informations des stagiaires.

# Screenshots
<img width="960" alt="screen1" src="https://github.com/houssam12321/Gestion-Stagiaires/assets/129847735/5a1c1875-2337-40a5-bbcb-4421730efa34">
Exemple de liste des stagiaires enregistrés :
<img width="954" alt="screen2" src="https://github.com/houssam12321/Gestion-Stagiaires/assets/129847735/4b4e5125-8656-438e-a213-cfc51b8f8631">


## Installation

1. Clonez le dépôt :

    ```bash
    git clone https://github.com/votre_nom_utilisateur/votre_projet.git
    ```

2. Configurez votre environnement PHP et votre base de données.

3. Importez la structure de la base de données depuis le fichier `database.sql`.

4. Copiez le fichier `config.example.php` en `config.php` et configurez vos paramètres.

5. Lancez l'application à partir du serveur local ou utilisez un serveur web.

## Configuration

Modifiez le fichier `config.php` pour mettre à jour les paramètres de connexion à la base de données et d'autres configurations nécessaires à votre application.

```php
<?php
// config.php

define('DB_HOST', 'localhost');
define('DB_USER', 'votre_utilisateur');
define('DB_PASSWORD', 'votre_mot_de_passe');
define('DB_NAME', 'votre_base_de_donnees');
