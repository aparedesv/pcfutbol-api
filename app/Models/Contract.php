<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contract extends Model
{
    use SoftDeletes;

    protected $table = 'contracts';

    protected $fillable = [
        'id_person',
        'id_club',
        'years',
        'total',
        'clause',
        'start',
    ];
}
