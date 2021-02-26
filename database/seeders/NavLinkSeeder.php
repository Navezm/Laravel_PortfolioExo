<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nav_links')->insert([
            [
                'link' => 'home'
            ],
            [
                'link' => 'about'
            ],
            [
                'link' => 'portfolio'
            ],
            [
                'link' => 'contact'
            ]
        ]);
    }
}
