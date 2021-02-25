<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            [
                'span' => 'UI/UX DESIGN',
                'para' => 'To an English person, it will seem like simplified English,told me what ',
                'icon' => 'ion-ios-browsers-outline'
            ],
            [
                'span' => 'BRAND IDENTITY',
                'para' => 'To an English person, it will seem like simplified English,told me what ',
                'icon' => 'ion-ios-lightbulb-outline'
            ],
            [
                'span' => 'WEB DESIGN',
                'para' => 'To an English person, it will seem like simplified English,told me what ',
                'icon' => 'ion-ios-color-wand-outline'
            ],
            [
                'span' => 'MOBILE APPS',
                'para' => 'To an English person, it will seem like simplified English,told me what ',
                'icon' => 'ion-social-android-outline'
            ],
            [
                'span' => 'Analytics',
                'para' => 'To an English person, it will seem like simplified English,told me what ',
                'icon' => 'ion-ios-analytics-outline'
            ],
            [
                'span' => 'PHOTOGRAPHY',
                'para' => 'To an English person, it will seem like simplified English,told me what ',
                'icon' => 'ion-ios-camera-outline'
            ],
        ]);
    }
}
