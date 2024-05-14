# SuperClothes

Bienvenue sur **SuperClothes**, un site de vente de vêtements inspirés par les super-héros et leurs professions. Que vous soyez un fan de Superman le journaliste ou d'autres héros emblématiques, SuperClothes propose une variété de vêtements pour chaque passionné.

![image](https://github.com/rodriguesyasmin/PLANIFICATION-ET-GESTION-DE-PROJET-WEB/assets/128430011/3662f5f7-6235-4b85-8d5a-208b73c8cf9d)


## Fonctionnalités

- **Connexion et déconnexion** : Les utilisateurs peuvent se connecter et se déconnecter de leur compte.
- **Gestion des utilisateurs** : Gérez les comptes des utilisateurs (CRUD : Créer, Lire, Mettre à jour, Supprimer).
- **Gestion des produits** : Gérez les produits disponibles à la vente (CRUD : Créer, Lire, Mettre à jour, Supprimer).
- **Interface utilisateur intuitive** : Une interface claire et facile à naviguer pour une expérience utilisateur optimale.
- 
 ##  Responsabilités de développement :
# Backend:
- Yasmin Rodrigues ([GitHub](https://github.com/rodriguesyasmin)) 🔗
- Tiago Barros ([GitHub](https://github.com/tiagolp22)) 🔗

# Frontend:
- Clara Quintela ([GitHub](https://github.com/claraquintela)) 🔗
- Matheus Lopes ([GitHub](https://github.com/matheusandrei)) 🔗


## Technologies utilisées

- **Laravel** : Framework PHP puissant pour la création d'applications web.
- **SQLite** : Base de données légère et intégrée pour le stockage des données.
- **Tailwind CSS** : Framework CSS moderne et performant pour le design.
- **Livewire** : Bibliothèque pour créer des interfaces utilisateur interactives avec Laravel.

## Installation

Suivez ces étapes pour installer et configurer le projet :

1. Clonez le dépôt Git :

    ```bash
    git clone https://github.com/votre-nom-utilisateur/superclothes.git
    cd superclothes
    ```

2. Installez les dépendances :

    ```bash
    composer install
    npm install
    ```

3. Copiez le fichier d'exemple `.env` et configurez les variables d'environnement :

    ```bash
    cp .env.example .env
    ```

    Modifiez les variables d'environnement dans le fichier `.env` selon vos préférences.

4. Créez un fichier de base de données SQLite :

    ```bash
    touch database/database.sqlite
    ```

5. Exécutez les migrations pour configurer la base de données :

    ```bash
    php artisan migrate
    ```

6. Compilez les fichiers front-end :

    ```bash
    npm run dev
    ```

7. Démarrez le serveur de développement Laravel :

    ```bash
    php artisan serve
    ```

## Utilisation

- Accédez à votre application Laravel à l'adresse `http://localhost:8000`.
- Créez un compte ou connectez-vous pour commencer à acheter ou gérer des produits.

## Contribution

Les contributions sont les bienvenues. Veuillez soumettre des issues ou des pull requests pour toute amélioration ou correction de bogue.

## Licence

Ce projet est sous licence MIT.
