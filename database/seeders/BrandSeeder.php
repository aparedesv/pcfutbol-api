<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    public function run()
    {
        DB::table('brands')->insert(
            [
                'shield' => 'escut.jpg',
                'equipement_1' => 'equipacio_1.jpg',
                'equipement_2' => 'equipacio_2.jpg',
            ],
        );
    }
}
