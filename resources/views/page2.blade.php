<!DOCTYPE html>
<html>
<head>
    <title>Page 2</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<!-- TOP BAR -->
<div style="padding:15px; background:#4a90e2; color:white;">
    <strong>{{ $user->name }}</strong>
</div>

<!-- CONTENT -->
<div style="padding:20px; max-width:500px; margin:auto;">

    <h3>Add Task</h3>

    <form method="POST" action="/add-task">
        @csrf
        <input type="text" name="task" placeholder="Enter your task" required>
        <button type="submit">Add</button>
    </form>

    <hr>

    <h3>Your Tasks</h3>

    @if(count($tasks) == 0)
        <p>No tasks yet</p>
    @else
        <ul>
            @foreach($tasks as $t)
                <li>{{ $t->task }}</li>
            @endforeach
        </ul>
    @endif

</div>

</body>
</html>
