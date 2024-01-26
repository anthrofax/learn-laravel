<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::getAllPosts();

        return view('posts', [
            "title" => 'Posts',
            "posts" => $posts,
        ]);
    }

    public function show($slug) {
        $post = Post::getPostBySlug($slug);

        return view('post', [
            'title' => $post['title'],
            "post" => $post
        ]);
    }
}
