<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'Andreu Paredes',
                'email' => 'info@osonaweb.cat',
                'password' => '21232f297a57a5a743894a0e4a801fc3'
            ]
        );
    }
}

/**
 * per crear contingut, utilitzem les factories
 * User::factory()->count(50)->create();
 */
