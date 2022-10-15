@extends('base')

@section('title', 'Главная')

@section('content')
<section class="posts">
    <div class="container">
        @foreach ($posts as $post)
            <div class="post-item">
                <img class="post-item__img" src="{{ $post->img ?? '/images/default.jpg' }}">
                <div class="post-item__body">
                    <p class="post-item__title">{{ $post->title }}</p>
                    <p class="post-item__desc">{{ $post->desc }}</p>
                </div>
                <div class="post-item__footer">
                    <p class="post-item__status">Статус: {{ $post->status }}</p>
                    <a class="post-item__link" href="{{ route('detail', ['post' => $post->id]) }}">Смотреть полностью</a>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection