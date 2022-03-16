<?php

namespace Database\Seeders;

use App\Models\CategoryArticle;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'title' => 'Hello World',
                'description' => 'Première Description',
                'img' => 'images/blog/blog-post1.jpg',
                'user_id' => User::where('role_id', '<=', 2)->inRandomOrder()->first()->id,
                'category_article_id' => CategoryArticle::inRandomOrder()->first()->id,
            ],
            [
                'title' => 'Hello World',
                'description' => 'Première Description',
                'img' => 'images/blog/blog-post1.jpg',
                'user_id' => User::where('role_id', '<=', 2)->inRandomOrder()->first()->id,
                'category_article_id' => CategoryArticle::inRandomOrder()->first()->id,
            ],
            [
                'title' => 'Hello World',
                'description' => 'Première Description',
                'img' => 'images/blog/blog-post1.jpg',
                'user_id' => User::where('role_id', '<=', 2)->inRandomOrder()->first()->id,
                'category_article_id' => CategoryArticle::inRandomOrder()->first()->id,
            ],
            [
                'title' => 'Hello World',
                'description' => 'Première Description',
                'img' => 'images/blog/blog-post1.jpg',
                'user_id' => User::where('role_id', '<=', 2)->inRandomOrder()->first()->id,
                'category_article_id' => CategoryArticle::inRandomOrder()->first()->id,
            ],
        ]);
    }
}
