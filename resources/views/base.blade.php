<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles/main.css">
    <title>@yield('title')</title>
</head>
<body>

    <nav class="navbar">
        <div class="container">
            <a class="navbar__link" href="{{ route('index') }}">Главная</a>
            @guest
            <a class="navbar__link" href="{{ route('login') }}">Вход</a>
            <a class="navbar__link" href="{{ route('register') }}">Регистрация</a>
            @endguest
            @auth
            <a class="navbar__link" href="{{ route('home') }}">Мои заявки</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <input type="submit" value="Выйти" class="navbar__link">
            </form>
            @endauth
        </div>
    </nav>

    @yield('content')
</body>
</html>