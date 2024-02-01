@extends('layouts.main')

@section('container')
    <?php foreach ($posts as $post) : ?>
    <article>
        <h2>
            <a href="post/ {{$post->slug }}"> {{$post->title}}</a>
        </h2>
        <h3>By:  {{$post->author }}</h3>
        <p>{{ $post->excerpt}} </p>
    </article>

    <?php endforeach; ?>
@endsection
