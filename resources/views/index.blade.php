<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles/main.css">
    <title>Document</title>
</head>
<body>

    <nav class="navbar">
        <div class="container">
            <a class="navbar__link" href="#">Главная</a>
            <a class="navbar__link" href="#">Вход</a>
            <a class="navbar__link" href="#">Регистрация</a>
        </div>
    </nav>

    <section class="posts">
        <div class="container">
            @foreach ($posts as $post)
                <div class="post">
                    <img src="{{ $post->img ?? '/images/default.jpg' }}">
                    <p>{{ $post->title }}</p>
                    <p>{{ $post->desc }}</p>
                    <p>{{ $post->status }}</p>
                </div>
            @endforeach
        </div>
    </section>

</body>
</html>