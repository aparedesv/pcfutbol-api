<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClubTeams extends Model
{
    protected $table = 'club_teams';

    protected $fillable = [
        'id_team',
        'id_club',
    ];
}
