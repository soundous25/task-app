<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $tasks = [
            ['title' => 'Créer la page de connexion',       'is_done' => false],
            ['title' => 'Préparer le CV',                   'is_done' => false],
            ['title' => 'Gérer les erreurs',                'is_done' => false],
            ['title' => 'Corriger les bugs de migration',   'is_done' => true],
            ['title' => 'Vérifier l\'affichage des tâches', 'is_done' => true],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
