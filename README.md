# TaskFlow - Application de gestion de tâches (Laravel)

🔗 Repository : https://github.com/soundous25/task-app.git

---

## Présentation

TaskFlow est une application web de gestion de tâches développée avec Laravel.  

Elle permet de créer, afficher, modifier et supprimer des tâches avec un système d’authentification.

Ce projet a été réalisé dans le cadre d’un challenge technique afin de démontrer la maîtrise de Laravel, du CRUD et de l’architecture MVC.

---

## Fonctionnalités

- Authentification des utilisateurs (Laravel Breeze)

- Ajouter une tâche avec un titre

- Afficher la liste des tâches

- Marquer une tâche comme terminée / non terminée

- Supprimer une tâche

- Séparation des tâches en cours et terminées

---

## Technologies utilisées

- Laravel 12
- PHP 8+
- Blade (templating engine)
- SQLite (base de données)
- Laravel Breeze (authentification)
- HTML / CSS

---

## Installation

### 1. Cloner le projet

git clone https://github.com/soundous25/task-app.git  

cd task-app  

### 2. Installer les dépendances

composer install  

npm install  

### 3. Configuration de l’environnement

cp .env.example .env  

php artisan key:generate  

### 4. Base de données

Le projet utilise SQLite par défaut.

- Table : tasks
- id
- title
- is_done
- created_at
- updated_at

### 5. Lancer les migrations

php artisan migrate  

### 6. Lancer le serveur

php artisan serve  

---

## Données de test

- Vérifier l’affichage des tâches dans Blade

- Créer la page de connexion  

- Préparer un cv

- Corriger les bugs de migration  
 