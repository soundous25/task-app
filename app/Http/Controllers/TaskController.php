<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // Afficher les tâches
public function index()
{
    $tasks = Task::all();
    return view('tasks.index', compact('tasks'));
}
    // Ajouter une tâche
  public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255'
    ]);

    Task::create([
        'title' => $request->title,
        'is_done' => false
    ]);

    return redirect('/tasks');
}
    // Marquer terminé / pas terminé
    public function update($id)
    {
        $task = Task::findOrFail($id);
        $task->is_done = !$task->is_done;
        $task->save();

        return redirect('/tasks');
    }

    // Supprimer
    public function destroy($id)
    {
        Task::destroy($id);
         return redirect('/tasks');
    }
}
