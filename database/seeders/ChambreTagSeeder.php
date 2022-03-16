<?php

namespace Database\Seeders;

use App\Models\Chambre;
use App\Models\TagChambre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChambreTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = TagChambre::all();
        Chambre::all()->each(function ($chambre) use ($tags) {
            $chambre->tags()->attach(
                $tags->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
