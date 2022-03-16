<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_articles')->insert([
            [
                "nom"=>"Travel",

            ],

            [
                "nom"=>"Rooms"

            ],
            [
                "nom"=>"Rooms"

            ],
            [
                "nom"=>"Holidays"

            ],
            [
                "nom"=>"Travel"

            ],
            [
                "nom"=>"Events"

            ],
        ]);
    }
}
