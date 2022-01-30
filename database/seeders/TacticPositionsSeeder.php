<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TacticPositionsSeeder extends Seeder
{
    public function run()
    {
        DB::table('tactic_positions')->insert([
            [
                'id_position' => 1,
                'id_tactic' => 1,
            ],
            [
                'id_position' => 2,
                'id_tactic' => 1,
            ],
            [
                'id_position' => 3,
                'id_tactic' => 1,
            ],
            [
                'id_position' => 5,
                'id_tactic' => 1,
            ],
            [
                'id_position' => 6,
                'id_tactic' => 1,
            ],
            [
                'id_position' => 7,
                'id_tactic' => 1,
            ],
            [
                'id_position' => 8,
                'id_tactic' => 1,
            ],
            [
                'id_position' => 9,
                'id_tactic' => 1,
            ],
            [
                'id_position' => 10,
                'id_tactic' => 1,
            ],
            [
                'id_position' => 17,
                'id_tactic' => 1,
            ],
            [
                'id_position' => 18,
                'id_tactic' => 1,
            ],
            [
                'id_position' => 1,
                'id_tactic' => 2,
            ],
            [
                'id_position' => 2,
                'id_tactic' => 2,
            ],
            [
                'id_position' => 3,
                'id_tactic' => 2,
            ],
            [
                'id_position' => 5,
                'id_tactic' => 2,
            ],
            [
                'id_position' => 6,
                'id_tactic' => 2,
            ],
            [
                'id_position' => 8,
                'id_tactic' => 2,
            ],
            [
                'id_position' => 9,
                'id_tactic' => 2,
            ],
            [
                'id_position' => 10,
                'id_tactic' => 2,
            ],
            [
                'id_position' => 14,
                'id_tactic' => 2,
            ],
            [
                'id_position' => 15,
                'id_tactic' => 2,
            ],
            [
                'id_position' => 16,
                'id_tactic' => 2,
            ],
            [
                'id_position' => 1,
                'id_tactic' => 3,
            ],
            [
                'id_position' => 4,
                'id_tactic' => 3,
            ],
            [
                'id_position' => 5,
                'id_tactic' => 3,
            ],
            [
                'id_position' => 6,
                'id_tactic' => 3,
            ],
            [
                'id_position' => 7,
                'id_tactic' => 3,
            ],
            [
                'id_position' => 8,
                'id_tactic' => 3,
            ],
            [
                'id_position' => 9,
                'id_tactic' => 3,
            ],
            [
                'id_position' => 10,
                'id_tactic' => 3,
            ],
            [
                'id_position' => 14,
                'id_tactic' => 3,
            ],
            [
                'id_position' => 15,
                'id_tactic' => 3,
            ],
            [
                'id_position' => 16,
                'id_tactic' => 3,
            ],
        ]);
    }
}
