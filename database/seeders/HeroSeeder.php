<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heroes')->insert([
            [
                'title' => "I'm",
                'job' => "Designer, Developer, Freelancer, Photographer",
                'dataType' => 'Alex Smith'
            ]
        ]);
    }
}
