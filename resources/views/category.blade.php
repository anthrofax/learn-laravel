@extends('layouts/main')

@section('container')
    <h2>Post Category: {{ $name }}</h2>

    <ul>
        <?php foreach($posts as $post) : ?>
        <li>
            <h4>
                <a href="/post/{{$post->slug}}">
                    {{ $post->title }}
                </a>
            </h4>
            <p>{{ $post->excerpt }}</p>
        </li>
        <?php endforeach; ?>
    </ul>
@endsection
