<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            LogoSeeder::class,
            InfoSeeder::class,
            FonctionSeeder::class,
            EmployeSeeder::class,
            CarouselSeeder::class,
            CategoryChambreSeeder::class,
            CategoryArticleSeeder::class,
            ArticleSeeder::class,
            CategoryImageSeeder::class,
            TagChambreSeeder::class,
            TagSeeder::class,
            TagArticleSeeder::class,
            ServiceRoomSeeder::class,
            StatutServiceSeeder::class,
            ServiceSeeder::class,
            ChambreSeeder::class,
            ChambreServiceSeeder::class,
            ChambreTagSeeder::class,
            ContactSeeder::class,
            ImageSeeder::class,
        ]);
    }
}
