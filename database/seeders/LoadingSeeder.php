<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoadingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loadings')->insert([
            [
                'p1' => 'Loading',
                'p2' => 'Your message has been sent. Thank you!'
            ]
        ]);
    }
}
