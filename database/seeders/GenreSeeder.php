<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [
                'filter' => '*',
                'title' => 'All'
            ],
            [
                'filter' => '.filter-app',
                'title' => 'App'
            ],
            [
                'filter' => '.filter-card',
                'title' => 'Card'
            ],
            [
                'filter' => '.filter-web',
                'title' => 'Web'
            ],
        ]);
    }
}
