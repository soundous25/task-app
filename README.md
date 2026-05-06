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

## 🛠️ Technologies utilisées

- Laravel 12
- PHP 8+
- Blade (templating engine)
- SQLite 
- HTML / CSS

---

## 📂 Structure du projet

- Model : `Task`
- Controller : `TaskController`
- Migration : `create_tasks_table`
- Views : `resources/views/tasks`
- Routes : `routes/web.php`

---

## 🗄️ Base de données

Table : `tasks`

| Champ      | Type      | Description              |
|------------|----------|--------------------------|
| id         | bigint   | Identifiant unique       |
| title      | string   | Titre de la tâche        |
| is_done    | boolean  | Statut de la tâche       |
| created_at | timestamp| Date de création         |
| updated_at | timestamp| Date de mise à jour      |

---

## ⚙️ Installation

1. Cloner le projet :
```bash
git clone <repo_url>