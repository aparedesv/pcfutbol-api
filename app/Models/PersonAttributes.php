<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PersonAttributes extends Model
{
    use SoftDeletes;

    protected $table = 'person_attributes';

    protected $fillable = [
        'id_person',
        'technique',
        'aggressiveness',
        'speed',
        'fitness',
        'moral',
    ];
}
