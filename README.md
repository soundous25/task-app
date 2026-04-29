# Task Manager - Laravel

## Description
Application simple de gestion de tâches réalisée avec Laravel.

## Fonctionnalités
- Ajouter une tâche
- Afficher les tâches
- Marquer une tâche comme terminée
- Supprimer une tâche

## Technologies utilisées
- Laravel
- PHP
- SQLite
- Blade

## Installation

1. Cloner le projet
2. Installer les dépendances :
   composer install

3. Copier le fichier env :
   cp .env.example .env

4. Générer la clé :
   php artisan key:generate

5. Lancer les migrations :
   php artisan migrate

6. Lancer le serveur :
   php artisan serve

## Base de données

Table: tasks  
- id  
- title  
- is_done  
- created_at  
- updated_at

## Auteur
Projet réalisé dans le cadre d’un challenge technique.