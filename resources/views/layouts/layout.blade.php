<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My Blog</title>

    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
<div class="container">
    @include('layouts.nav')
    <div class="row">
        @yield('content')
        @include('layouts.sidebar')
    </div>
</div>
@include('layouts.footer')

</body>
</html>
