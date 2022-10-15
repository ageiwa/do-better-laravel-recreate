@extends('base')

@section('title', 'Заявка')

@section('content')
<div class="post">
    <div class="container">

        <div class="post__img">

            <img src="{{ $post->img ?? '/images/default.jpg' }}">
            <div class="post__info">
                <div>
                    <p class="post__author">Автор: {{ $post->user->name }}</p>
                    <p class="post__date">Дата: {{ $post->created_at }}</p>
                </div>
                <p class="post__date">Статус: {{ $post->status }}</p>
            </div>

        </div>

        <div class="post__content">

            <div class="post__text">
                <h1 class="post__title">{{ $post->title }}</h1>
                <p class="post__desc">{{ $post->desc }}</p>
            </div>

        </div>
    </div>
</div>
@endsection