<!DOCTYPE html>
<html>
<head>
    <title>Laravel Text page</title>
</head>
<body>
<h1>Hello World!</h1>
<div>
    <li>
        @foreach ($apprentices as $apprentice)
            <li>{{ $apprentice }}</li>
        @endforeach
    </li>
</div>
</body>
</html>