<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infos')->insert([
            [
                'title' => 'GET IN TOUCH',
                'address1' => '23 Main, Street',
                'address2' => 'New York, United States',
                'address3' => '+88 01912704287',
                'address4' => 'example@example.com',
            ]
        ]);
    }
}
