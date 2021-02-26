<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hero_links')->insert([
            [
                'link' => 'ion-social-facebook'
            ],
            [
                'link' => 'ion-social-twitter'
            ],
            [
                'link' => 'ion-social-instagram'
            ],
            [
                'link' => 'ion-social-googleplus'
            ],
            [
                'link' => 'ion-social-tumblr'
            ],
            [
                'link' => 'ion-social-dribbble'
            ],
        ]);
    }
}
