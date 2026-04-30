<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // Afficher les tâches
public function index()
{
    $pendingTasks = Task::where('is_done', false)->get();
    $completedTasks = Task::where('is_done', true)->get();

    return view('tasks.index', compact('pendingTasks', 'completedTasks'));
}
    // Ajouter une tâche
  public function store(Request $request)
{
    $request->validate([
    'title' => 'required|min:1|max:255'
]);

    Task::create([
        'title' => $request->title,
        'is_done' => false
    ]);

    return redirect('/tasks');
}
    // Marquer terminé / pas terminé
 public function update(Task $task)
{
    $task->is_done = !$task->is_done;
    $task->save(); // PAS saveQuietly

    return redirect('/tasks');
}

    // Supprimer
      public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/tasks');
    }
}