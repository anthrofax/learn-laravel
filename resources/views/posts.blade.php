@extends('layouts.main')

@section('container')
    <h1 class="mb-4">{{$title}}</h1>
    <?php foreach ($posts as $post) : ?>
    <article class="mb-5 border-bottom p-4">
        <h3>
            <a href="/post/{{ $post->slug }}"> {{ $post->title }}</a>
        </h3>
        <p >By <a class="text-decoration-none" href="author/{{$post->author->username}}">{{$post->author->name}}</a> in <a class="text-decoration-none" href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>
        <p>{{ $post->excerpt }} </p>
        <a href="/post/{{$post->slug}}">Read more....</a>
    </article>

    <?php endforeach; ?>
@endsection
