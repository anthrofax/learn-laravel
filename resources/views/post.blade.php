@extends('layouts.main')

@section('container')
    <h1 href="post/ {{ $post->slug }}"> {{ $post->title }}</h1>
    <h3>By: {{ $post->author->name }} - <a href="/categories/{{$category->slug}}">{{ $category->name }}</a></h3>
    {{-- {{$post->body }} --}}
    {!! $post->body !!}

    <a class="d-block mt-3" href="/blog">Back to posts</a>
@endsection
