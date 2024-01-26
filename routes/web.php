<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => 'Home'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => 'About',
        "name" => "Afridho Ikhsan",
        "email" => "afridho@gmail.com",
        "image" => "myself.png"
    ]);
});
Route::get('/blog', function () {
    $posts = $posts = Post::getAllPosts();

    return view('posts', [
        "title" => 'Posts',
        "posts" => $posts,
    ]);
});

Route::get('/post/{slug}', function($slug) {
    $post = Post::getPostBySlug($slug);

    return view('post', [
        'title' => $post['title'],
        "post" => $post
    ]);
});
