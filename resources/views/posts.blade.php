@extends('layouts.main')

@section('container')
    <h1 class="mb-4">Halaman Blog Post</h1>
    <?php foreach ($posts as $post) : ?>
    <article class="mb-5 border-bottom p-4">
        <h3>
            <a href="post/{{ $post->slug }}"> {{ $post->title }}</a>
        </h3>
        <p >By <a class="text-decoration-none" href="">{{$post->author}}</a> in <a class="text-decoration-none" href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>
        <p>{{ $post->excerpt }} </p>
        <a href="/post/{{$post->slug}}">Read more....</a>
    </article>

    <?php endforeach; ?>
@endsection
