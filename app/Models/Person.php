<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use SoftDeletes;

    protected $table = 'people';

    protected $fillable = [
        'id_role',
        'name',
        'surnames',
        'birthdate',
    ];
}
