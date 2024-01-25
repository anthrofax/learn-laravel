@extends('layouts.main')

@section('container')
    <h1 href="post/<?= $post['slug'] ?>"><?= $post['title'] ?></h1>
    <h3>By: <?= $post['author'] ?></h3>
    <p><?= $post['body'] ?></p>

    <a href="/blog">Back to posts</a>
@endsection
