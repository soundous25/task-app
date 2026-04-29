<!DOCTYPE html>
<html>
<head>
    <title>Mes tâches</title>
</head>
<body>

<h1>Liste des tâches</h1>

<form method="POST" action="/tasks">
    @csrf
    <input type="text" name="title" placeholder="Ajouter une tâche">
    <button type="submit">Ajouter</button>
</form>

<hr>

<h2>Tâches non terminées</h2>
<ul>
@foreach($tasks->where('is_done', false) as $task)
    <li>
        {{ $task->title }}

        <form method="POST" action="/tasks/{{ $task->id }}" style="display:inline;">
            @csrf
            @method('PUT')
            <button type="submit">Terminé</button>
        </form>

        <form method="POST" action="/tasks/{{ $task->id }}" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Supprimer</button>
        </form>
    </li>
@endforeach
</ul>

<h2>Tâches terminées</h2>
<ul>
@foreach($tasks->where('is_done', true) as $task)
    <li>
        <del>{{ $task->title }}</del>
    </li>
@endforeach
</ul>

</body>
</html>