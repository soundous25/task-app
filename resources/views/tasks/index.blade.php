<body style="font-family: Arial; background:#f5f5f5; padding:30px;">

<div style="max-width:600px; margin:auto; background:white; padding:20px; border-radius:10px;">

<h2 style="text-align:center;">📝 Gestion des tâches</h2>

<form method="POST" action="/tasks" style="margin-bottom:20px;">
    @csrf
    <input type="text" name="title" placeholder="Ajouter une tâche" style="width:70%; padding:8px;">
    <button style="padding:8px 15px; background:blue; color:white;">Ajouter</button>
</form>

<h4>Tâches non terminées</h4>

@foreach($tasks->where('is_done', false) as $task)
<div style="background:#eee; padding:10px; margin-bottom:10px; border-radius:5px;">
    
    <span>{{ $task->title }}</span>

    <div style="float:right;">
        <form method="POST" action="/tasks/{{ $task->id }}" style="display:inline;">
            @csrf
            @method('PUT')
            <button>✔</button>
        </form>

        <form method="POST" action="/tasks/{{ $task->id }}" style="display:inline;">
            @csrf
            @method('DELETE')
            <button>✖</button>
        </form>
    </div>

</div>
@endforeach

<h4>Tâches terminées</h4>

@foreach($tasks->where('is_done', true) as $task)
<div style="background:#ddd; padding:10px; margin-bottom:10px; border-radius:5px;">
    <del>{{ $task->title }}</del>
</div>
@endforeach

</div>

</body>