<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonPositions extends Model
{
    protected $table = 'person_positions';

    protected $fillable = [
        'id_person',
        'id_position',
    ];
}
