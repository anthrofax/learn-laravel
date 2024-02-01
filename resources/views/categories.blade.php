@extends('layouts.main')

@section('container')
    <h2>
        Post Categories
    </h2>
    <ul>
        <?php foreach ($categories as $category) : ?>
        <li>
            <h3>
                <a href="categories/{{$category->slug}}">
                    {{ $category->name }}
                </a>
            </h3>
        </li>
        <?php endforeach; ?>
    </ul>
@endsection
