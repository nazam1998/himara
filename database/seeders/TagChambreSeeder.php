<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagChambreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tag_chambres')->insert([
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
