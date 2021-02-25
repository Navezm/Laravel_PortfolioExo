<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            [
                'src' => 'img/me.jpg',
                'p1' => 'im a ux /ui designer austin based who loves clean, simple & unique design. i also enjoy crafting brand identities, icons, & ilustration work. ',
                'p2' => 'To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family.English person.'
            ]
        ]);
    }
}
