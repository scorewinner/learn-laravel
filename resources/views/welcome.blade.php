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
            <li>{{ $task->body }}</li>
        @endforeach
    </ul>
</div>
</body>
</html>