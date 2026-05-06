# 📝 Task Manager - Laravel

Une mini application de gestion de tâches développée avec Laravel et Blade.

---

## Description

Cette application permet de gérer une liste de tâches avec les fonctionnalités suivantes :

- Ajouter une tâche
- Afficher la liste des tâches
- Marquer une tâche comme terminée / non terminée
- Supprimer une tâche

---

## Technologies utilisées

- Laravel 12
- PHP 8+
- Blade (templating engine)
- SQLite 
- HTML / CSS

---

## Structure du projet

- Model : `Task`
- Controller : `TaskController`
- Migration : `create_tasks_table`
- Views : `resources/views/tasks`
- Routes : `routes/web.php`

---

## Base de données

Table : `tasks`

| Champ      | Type      | Description              |
|------------|----------|--------------------------|
| id         | bigint   | Identifiant unique       |
| title      | string   | Titre de la tâche        |
| is_done    | boolean  | Statut de la tâche       |
| created_at | timestamp| Date de création         |
| updated_at | timestamp| Date de mise à jour      |

---

## Installation

1. Cloner le projet :
```bash
git clone https://github.com/soundous25/task-app.git
cd task-app
```

2. Installer les dépendances :
```bash
composer install
```

3. Copier le fichier d'environnement :
```bash
cp .env.example .env
```

4. Générer la clé d'application :
```bash
php artisan key:generate
```

5. Créer la base de données SQLite :
```bash
touch database/database.sqlite
```

6. Lancer les migrations :
```bash
php artisan migrate
```

7. (Optionnel) Charger les données de test :
```bash
php artisan db:seed
```

8. Démarrer le serveur :
```bash
php artisan serve
```

L'application est accessible sur : **http://127.0.0.1:8000**

---

## Données de test

Après `php artisan db:seed`, 5 tâches d'exemple sont créées (2 terminées, 3 en cours).
