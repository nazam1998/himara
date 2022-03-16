<?php

namespace Database\Seeders;

use App\Models\CategoryChambre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChambreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chambres')->insert([
            [
                'nom' => 'Istanbul',
                'description' => "Improvise ssalam",
                'img' => "images/rooms/single/single1.jpg",
                'prix' => 89,
                'max' => 2,
                'sofa' => 2,
                'lit' => 1,
                'category_chambre_id' => CategoryChambre::inRandomOrder()->first()->id,
            ],
            [
                'nom' => 'Istanbul',
                'description' => "Improvise ssalam",
                'img' => "images/rooms/single/single1.jpg",
                'prix' => 89,
                'max' => 2,
                'sofa' => 2,
                'lit' => 1,
                'category_chambre_id' => CategoryChambre::inRandomOrder()->first()->id,
            ],
            [
                'nom' => 'Istanbul',
                'description' => "Improvise ssalam",
                'img' => "images/rooms/single/single1.jpg",
                'prix' => 89,
                'max' => 2,
                'sofa' => 2,
                'lit' => 1,
                'category_chambre_id' => CategoryChambre::inRandomOrder()->first()->id,
            ],
            [
                'nom' => 'Istanbul',
                'description' => "Improvise ssalam",
                'img' => "images/rooms/single/single1.jpg",
                'prix' => 89,
                'max' => 2,
                'sofa' => 2,
                'lit' => 1,
                'category_chambre_id' => CategoryChambre::inRandomOrder()->first()->id,
            ],
            [
                'nom' => 'Istanbul',
                'description' => "Improvise ssalam",
                'img' => "images/rooms/single/single1.jpg",
                'prix' => 89,
                'max' => 2,
                'sofa' => 2,
                'lit' => 1,
                'category_chambre_id' => CategoryChambre::inRandomOrder()->first()->id,
            ],
        ]);
    }
}
