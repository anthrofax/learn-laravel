@extends('layouts.main')

@section('container')
    <h1 href="post/ {{ $post->slug }}"> {{ $post->title }}</h1>
    <h3>By: {{ $post->author }}</h3>
    {{-- {{$post->body }} --}}
    {!! $post->body !!}

    <a href="/blog">Back to posts</a>
@endsection
