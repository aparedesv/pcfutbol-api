<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Usuaris extends Model
{

    use SoftDeletes;

    protected $table = 'usuaris';

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
