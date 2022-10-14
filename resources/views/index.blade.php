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
                    <img class="post__img" src="{{ $post->img ?? '/images/default.jpg' }}">
                    <div class="post__body">
                        <p class="post__title">{{ $post->title }}</p>
                        <p class="post__desc">{{ $post->desc }}</p>
                    </div>
                    <div class="post__footer">
                        <p class="post__status">Статус: {{ $post->status }}</p>
                        <a class="post__link" href="{{ route('detail', ['post' => $post->id]) }}">Смотреть полностью</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

</body>
</html>