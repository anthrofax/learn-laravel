<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
Route::get('/blog', [PostController::class, 'index']);

Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => 'Post Category',
        'name' => $category->name,
        'posts' => $category->posts
    ]);
});

Route::get('author/{author:username}', function(User $author) {
    return view('posts', [
        'title' => 'Daftar unggahan pengguna',
        'posts' => $author->posts,
    ]);
});