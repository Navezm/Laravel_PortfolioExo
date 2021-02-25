<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('forms')->insert([
            [
                'placeholder' => 'Your Name',
                'datamessage' => 'Please enter at least 4 chars'
            ],
            [
                'placeholder' => 'Your Email',
                'datamessage' => 'Please enter a valid email'
            ],
            [
                'placeholder' => 'Subject',
                'datamessage' => 'Please enter at least 8 chars of subject'
            ],
            [
                'placeholder' => 'Message',
                'datamessage' => 'Please write something for us'
            ]
        ]);
    }
}
