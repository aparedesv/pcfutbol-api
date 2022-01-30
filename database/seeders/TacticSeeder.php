<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TacticSeeder extends Seeder
{
    public function run()
    {
        DB::table('tactics')->insert([
            [
                'description' => '4-4-2'
            ],
            [
                'description' => '4-3-3'
            ],
            [
                'description' => '3-4-3'
            ],
        ]);
    }
}
