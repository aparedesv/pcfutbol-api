<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Field extends Model
{
    use SoftDeletes;

    protected $table = 'fields';

    protected $fillable = [
        'id_location',
        'name',
        'capacity',
    ];
}
