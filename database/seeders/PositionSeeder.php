<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    public function run()
    {
        DB::table('positions')->insert([
            [
                'description' => 'porter',
                'display' => 'PT',
                'category' => 1,
                'side' => NULL
            ],
            [
                'description' => 'lateral dret',
                'display' => 'LD',
                'category' => 2,
                'side' => 1
            ],
            [
                'description' => 'lateral esquerra',
                'display' => 'LE',
                'category' => 2,
                'side' => 2
            ],
            [
                'description' => 'lliure',
                'display' => 'LL',
                'category' => 2,
                'side' => 3
            ],
            [
                'description' => 'central dret',
                'display' => 'CD',
                'category' => 2,
                'side' => 1
            ],
            [
                'description' => 'central esquerra',
                'display' => 'CE',
                'category' => 2,
                'side' => 2
            ],
            [
                'description' => 'mig centre defensiu',
                'display' => 'DM',
                'category' => 3,
                'side' => 3
            ],
            [
                'description' => 'mig centre',
                'display' => 'MC',
                'category' => 3,
                'side' => 3
            ],
            [
                'description' => 'mig dret',
                'display' => 'MD',
                'category' => 3,
                'side' => 1
            ],
            [
                'description' => 'mig esquerra',
                'display' => 'ME',
                'category' => 3,
                'side' => 2
            ],
            [
                'description' => 'interior dret',
                'display' => 'ID',
                'category' => 3,
                'side' => 1
            ],
            [
                'description' => 'interior esquerra',
                'display' => 'IE',
                'category' => 3,
                'side' => 2
            ],
            [
                'description' => 'mitja punta',
                'display' => 'MP',
                'category' => 4,
                'side' => 3
            ],
            [
                'description' => 'extrem dret',
                'display' => 'ED',
                'category' => 4,
                'side' => 1
            ],
            [
                'description' => 'extrem esquerra',
                'display' => 'EE',
                'category' => 4,
                'side' => 2
            ],
            [
                'description' => 'davanter centre',
                'display' => 'DC',
                'category' => 4,
                'side' => 3
            ],
            [
                'description' => 'segon davanter 1',
                'display' => 'SD',
                'category' => 4,
                'side' => 3
            ],
            [
                'description' => 'segon davanter 2',
                'display' => 'SD',
                'category' => 4,
                'side' => 3
            ],
        ]);
    }
}
