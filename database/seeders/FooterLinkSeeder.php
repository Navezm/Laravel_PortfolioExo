<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footer_links')->insert([
            [
                'icon' => 'ion-social-facebook',
            ],
            [
                'icon' => 'ion-social-twitter',
            ],
            [
                'icon' => 'ion-social-instagram',
            ],
            [
                'icon' => 'ion-social-googleplus',
            ],
            [
                'icon' => 'ion-social-tumblr',
            ],
            [
                'icon' => 'ion-social-dribbble',
            ]
        ]);
    }
}
