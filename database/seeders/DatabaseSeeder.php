<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\PostFactory;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // User::create([
        //     'name' => 'Afridho Ikhsan',
        //     'email' => 'afridhoikhsan@gmail.com',
        //     'password' => bcrypt(12345)
        // ]);
        // User::create([
        //     'name' => 'Rizki Septiana',
        //     'email' => 'rizki@gmail.com',
        //     'password' => bcrypt(12345)
        // ]);
        // User::create([
        //     'name' => 'Sopian Syauri',
        //     'email' => 'sopian@gmail.com',
        //     'password' => bcrypt(12345)
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        // Post::create([
        //     'title' => 'Master Python only in 70 Hours!',
        //     'category_id' => '1',
        //     'user_id' => '1',
        //     'slug' => 'master-python-only-in-70-hours',
        //     'excerpt' => 'fugiat quas laudantium iusto ipsa cum aliquam, accusantium maiores. Non ea tempore dolorem dicta at vero saepe, vitae earum nemo',
        //     'author' => 'Afridho',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti labore nesciunt nisi, beatae aut iusto quae aperiam atque dolorem nobis.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam quae eaque inventore debitis illo unde neque impedit nulla maiores optio! Blanditiis culpa molestias perferendis nam quia ipsa iste ducimus eum!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere blanditiis eveniet saepe neque quam maxime!</p>'
        // ]);
        // Post::create([
        //     'title' => 'Learn Javascript From Beginners to Master',
        //     'category_id' => '1',
        //     'user_id' => '2',
        //     'slug' => 'learn-javascript-from-beginners-to-master',
        //     'excerpt' => 'fugiat quas laudantium iusto ipsa cum aliquam, accusantium maiores. Non ea tempore dolorem dicta at vero saepe, vitae earum nemo',
        //     'author' => 'Rizki',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti labore nesciunt nisi, beatae aut iusto quae aperiam atque dolorem nobis.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam quae eaque inventore debitis illo unde neque impedit nulla maiores optio! Blanditiis culpa molestias perferendis nam quia ipsa iste ducimus eum!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere blanditiis eveniet saepe neque quam maxime!</p>'
        // ]);
        // Post::create([
        //     'title' => 'MVC Architecture',
        //     'category_id' => '2',
        //     'user_id' => '3',
        //     'slug' => 'mvc-architecture',
        //     'author' => 'Sopian',
        //     'excerpt' => 'fugiat quas laudantium iusto ipsa cum aliquam, accusantium maiores. Non ea tempore dolorem dicta at vero saepe, vitae earum nemo',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti labore nesciunt nisi, beatae aut iusto quae aperiam atque dolorem nobis.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam quae eaque inventore debitis illo unde neque impedit nulla maiores optio! Blanditiis culpa molestias perferendis nam quia ipsa iste ducimus eum!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere blanditiis eveniet saepe neque quam maxime!</p>'
        // ]);
        // Post::create([
        //     'title' => 'Welcome to Samdalri',
        //     'category_id' => '3',
        //     'user_id' => '1',
        //     'slug' => 'welcome-to-samdalri',
        //     'author' => 'Afridho',
        //     'excerpt' => 'fugiat quas laudantium iusto ipsa cum aliquam, accusantium maiores. Non ea tempore dolorem dicta at vero saepe, vitae earum nemo',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti labore nesciunt nisi, beatae aut iusto quae aperiam atque dolorem nobis.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam quae eaque inventore debitis illo unde neque impedit nulla maiores optio! Blanditiis culpa molestias perferendis nam quia ipsa iste ducimus eum!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere blanditiis eveniet saepe neque quam maxime!</p>'
        // ]);

        Post::factory(20)->create();
    }
}
