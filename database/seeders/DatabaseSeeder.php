<?php

namespace Database\Seeders;

use App\Models\FooterLink;
use App\Models\NavLink;
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
        $this->call([
            AboutSeeder::class,
            FooterLinkSeeder::class,
            FooterLink::class,
            FormSeeder::class,
            GenreSeeder::class,
            HeroLinkSeeder::class,
            HeroSeeder::class,
            InfoSeeder::class,
            LoadingSeeder::class,
            NavLinkSeeder::class,
            PortfolioSeeder::class,
            ProjectSeeder::class,
            SkillSeeder::class
        ]);
    }
}
