<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::with(['author', 'category'])->latest()->get();

        $title = '';

        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title  = ' by '.$author->name;
        }

        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title  = ' in '.$category->name;
        }

        return view('posts', [
            "title" => 'All posts'.$title,
            'active' => 'posts',
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString(),
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => $post['title'],
            'active' => 'posts',
            "post" => $post,
            'category' => $post->category
        ]);
    }
}
