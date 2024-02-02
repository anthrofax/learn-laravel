<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::with(['author', 'category'])->latest()->get();

        return view('posts', [
            "title" => 'All posts',
            "posts" => $posts,
        ]);
    }

    public function show(Post $post) {
        return view('post', [
            'title' => $post['title'],
            "post" => $post,
            'category' => $post->category
        ]);
    }
}
