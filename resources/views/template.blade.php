<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso de Laravel 9</title>
</head>
<body>
    <p>
        <a href="{{route('home')}}">Home</a>
        @auth
        <a href="{{route('dashboard')}}">Dashboard</a>
        @else
        <a href="{{route('login')}}">Inicio de sesión</a>
        @endauth
    </p>

    <hr>

    @yield('content')
</body>
</html>