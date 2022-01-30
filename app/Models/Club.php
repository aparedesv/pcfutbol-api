<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Club extends Model
{
    use SoftDeletes;

    protected $table = 'clubs';

    protected $fillable = [
        'id_user',
        'id_location',
        'name',
        'balance',
    ];
}
