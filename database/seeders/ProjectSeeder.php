<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                'src' => 'img/portfolio/portfolio-1.jpg',
                'title' => 'App 1',
                'p' => 'App'
            ],
            [
                'src' => 'img/portfolio/portfolio-2.jpg',
                'title' => 'Web 3',
                'p' => 'Web'
            ],
            [
                'src' => 'img/portfolio/portfolio-3.jpg',
                'title' => 'App 2',
                'p' => 'Web'
            ],
            [
                'src' => 'img/portfolio/portfolio-4.jpg',
                'title' => 'Web 3',
                'p' => 'Web'
            ],
            [
                'src' => 'img/portfolio/portfolio-5.jpg',
                'title' => 'Web 3',
                'p' => 'Web'
            ],
            [
                'src' => 'img/portfolio/portfolio-6.jpg',
                'title' => 'Web 3',
                'p' => 'Web'
            ],
        ]);
    }
}
