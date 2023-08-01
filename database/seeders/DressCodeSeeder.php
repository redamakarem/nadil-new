<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DressCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dress_codes')->insert([
            [
                'name_en' => 'Casual',
                'name_ar' => 'عادي',
            ],
            [
                'name_en' => 'Smart Casual',
                'name_ar' => 'سمارت كاجوال',
            ],
            [
                'name_en' => 'Semiformal',
                'name_ar' => 'شبه رسمي',
            ],
            [
                'name_en' => 'Formal',
                'name_ar' => 'رسمي',
            ],
        ]);
    }
}
