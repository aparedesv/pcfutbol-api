<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';

    protected $fillable = [
        'active',
        'first_name',
        'last_name',
        'email',
        'password',
        'token',
        'rol',
    ];
}
