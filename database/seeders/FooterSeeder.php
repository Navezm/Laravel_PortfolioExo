<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            [
                'p1' => '© Copyrights Folio. All rights reserved.',
                'p2' => 'Designed by /BootstrapMade',
                'link' => 'https://bootstrapmade.com/'
            ]
        ]);
    }
}
