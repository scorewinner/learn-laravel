<!DOCTYPE html>
<html>
<head>
    <title>Laravel Text page</title>
</head>
<body>
<h1>Hello World!</h1>
<div>
    <ul>
        @foreach ($tasks as $task)
            <li><a href="/tasks/{{ $task->id }}">{{ $task->body }}</a></li>
        @endforeach
    </ul>
</div>
</body>
</html>