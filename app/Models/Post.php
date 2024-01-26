<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    static private $posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Afridho Ikhsan",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam sunt ex fuga ipsam earum magnam reprehenderit impedit accusamus quos assumenda vitae, quod veritatis porro harum. Ex, saepe ullam? Reprehenderit ratione magni, sequi eos veritatis libero nisi. Magni omnis, enim sunt ullam, pariatur reiciendis a vero odit deleniti iusto quas blanditiis labore nisi voluptatum! Ad accusamus debitis similique voluptatem praesentium numquam laborum eius ut sunt corporis est, explicabo id natus culpa."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rizki Septiana",
            "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium repellat vel earum ipsum deleniti alias velit sed distinctio ad nemo saepe pariatur labore officia officiis, soluta recusandae aliquam cum eius voluptates, architecto necessitatibus. At officia maiores nesciunt deleniti sed quod illum quo, modi sapiente dolorem minus sint iusto dolore nihil harum qui! Voluptatum molestias dignissimos reprehenderit maxime numquam aliquam cupiditate beatae dicta eveniet et quisquam, temporibus, eius facilis quo nisi doloribus velit natus voluptas cumque minus placeat fugit tenetur inventore rem. Eius, alias nulla. Totam neque incidunt repudiandae dolorum delectus culpa, harum quo est tempora facilis quidem id sequi nisi."
        ],
    ];

    public static function getAllPosts()
    {
        return self::$posts;
    }

    public static function getPostBySlug($slug)
    {
        $post = [];
        foreach (self::$posts as $p) {
            if ($p['slug'] === $slug) {
                $post = $p;
            }
        }

        return $post;
    }
}


