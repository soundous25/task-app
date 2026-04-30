<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TaskFlow</title>

    <style>
        .container {
            max-width: 650px;
            margin: auto;
            font-family: Arial, sans-serif;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .app-title {
            font-size: 26px;
            font-weight: bold;
            color: #4f46e5;
        }

        .stats {
            color: #6b7280;
            font-size: 14px;
            display: flex;
            gap: 5px;
        }

        .form {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .input {
            flex: 1;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
        }

        .btn {
            background: #4f46e5;
            color: white;
            padding: 10px 15px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
        }

        .card {
            background: white;
            padding: 12px;
            border-radius: 12px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        .section-title {
            margin-top: 20px;
            color: #6b7280;
            font-size: 14px;
        }

        .empty {
            color: #9ca3af;
            font-size: 14px;
        }

        button {
            border: none;
            color: white;
            padding: 6px 10px;
            border-radius: 6px;
            cursor: pointer;
        }

        .done-btn {
            background: #22c55e;
        }

        .undo-btn {
            background: #f59e0b;
        }

        .delete {
            background: #ef4444;
            margin-left: 5px;
        }
    </style>
</head>

<body>

<div class="container">

    <!-- HEADER -->
    <div class="header">
        <h1 class="app-title">TaskFlow 📝</h1>

        <div class="stats">
            <span>{{ $pendingTasks->count() }} en cours</span>
            <span>•</span>
            <span>{{ $completedTasks->count() }} terminées</span>
        </div>
    </div>

    <!-- FORM AJOUT -->
    <form class="form" method="POST" action="/tasks">
        @csrf
        <input class="input" type="text" name="title" placeholder="Nouvelle tâche...">
        <button class="btn" type="submit">Ajouter</button>
    </form>

    <!-- EN COURS -->
    <h4 class="section-title">En cours</h4>

    @forelse($pendingTasks as $task)
        <div class="card">
            <span>{{ $task->title }}</span>

            <div>
                <!-- TERMINER -->
                <form style="display:inline;" method="POST" action="/tasks/{{ $task->id }}">
                    @csrf
                    @method('PUT')

                    <button class="done-btn" type="submit">
                        Terminer
                    </button>
                </form>

                <!-- SUPPRIMER -->
                <form style="display:inline;" method="POST" action="/tasks/{{ $task->id }}">
                    @csrf
                    @method('DELETE')

                    <button class="delete" type="submit">
                        Supprimer
                    </button>
                </form>
            </div>
        </div>
    @empty
        <p class="empty">Aucune tâche en cours</p>
    @endforelse

    <!-- TERMINÉES -->
    <h4 class="section-title">Terminées</h4>

    @forelse($completedTasks as $task)
        <div class="card">
            <span style="text-decoration: line-through; color: gray;">
                {{ $task->title }}
            </span>

            <div>
                <!-- ANNULER -->
                <form style="display:inline;" method="POST" action="/tasks/{{ $task->id }}">
                    @csrf
                    @method('PUT')

                    <button class="undo-btn" type="submit">
                        Annuler
                    </button>
                </form>

                <!-- SUPPRIMER -->
                <form style="display:inline;" method="POST" action="/tasks/{{ $task->id }}">
                    @csrf
                    @method('DELETE')

                    <button class="delete" type="submit">
                        Supprimer
                    </button>
                </form>
            </div>
        </div>
    @empty
        <p class="empty">Aucune tâche terminée</p>
    @endforelse

</div>

</body>
</html>