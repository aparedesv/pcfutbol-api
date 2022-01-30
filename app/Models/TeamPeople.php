<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamPeople extends Model
{
    protected $table = 'team_people';

    protected $fillable = [
        'id_team',
        'id_person',
        'order',
        'active_position',
    ];
}
