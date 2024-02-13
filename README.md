# SeoManiak Laravel CMS API

Bienvenue dans le projet SeoManiak Laravel CMS API ! Cette API sert de backend pour un système de gestion de contenu (CMS) simple permettant aux utilisateurs de gérer des articles.

## Objectif

L'objectif principal de ce projet est de développer une API RESTful avec Laravel pour gérer des articles dans un système de gestion de contenu.

## Technologies Utilisées

- **Laravel** : Un framework PHP pour la construction d'applications web et d'API.
- **MySQL** : Un système de gestion de base de données relationnelle utilisé pour stocker les informations sur les articles.

## Défis

- **API REST avec Laravel** : Développer des modèles, des contrôleurs et des routes pour gérer les articles dans le CMS. Assurez-vous que l'API communique avec une base de données MySQL pour stocker les informations sur les articles.
- **Sécurité et Validation** : Mettre en place une authentification pour sécuriser les routes de création, de mise à jour et de suppression des articles. Valider les données entrantes pour créer ou mettre à jour les articles.
- **Documentation de l'API** : Documenter les endpoints de l'API, y compris les méthodes HTTP, les URLs et les formats de requête/réponse.

## Critères d'Évaluation

- **Fonctionnalité de l'API REST** : L'API doit correctement implémenter les opérations CRUD.
- **Sécurité et Validation** : Les mécanismes d'authentification et de validation des données doivent être correctement appliqués.
- **Qualité du Code** : Le code doit être clair, bien organisé et commenté.



Critères d'Évaluation:
Fonctionnalité de l'API REST : L'API doit correctement implémenter les opérations CRUD.
Sécurité et Validation : Les mécanismes d'authentification et de validation des données doivent être correctement appliqués.
Qualité du Code : Le code doit être clair, bien organisé et commenté.

## Installation

1. Clone the repository to your local machine:

    ```bash
    git clone https://github.com/OtmanFakri/SeoManiak
    ```

2. Navigate to the project directory:

    ```bash
    cd SeoManiak
    ```

3. Install dependencies using Composer:

    ```bash
    composer install
    ```

4. Copy the `.env.example` file to `.env`:

    ```bash
    cp .env.example .env
    ```

5. Generate an application key:

    ```bash
    php artisan key:generate
    ```

    This will set the `APP_KEY` value in your `.env` file.

6. Configure your database settings in the `.env` file.

7. Run database migrations and seed (if necessary):

    ```bash
    php artisan migrate --seed
    ```

## Usage

To run the application, use the following command:

```bash
php artisan serve
```
