<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    public function run()
    {
        DB::table('countries')->insert([
            [
                'code' => 'ES',
                'name' => 'SPAIN',
            ],
            [
                'code' => 'PT',
                'name' => 'PORTUGAL',
            ],
            [
                'code' => 'FR',
                'name' => 'FRANCE',
            ],
            ]);
    }
}
