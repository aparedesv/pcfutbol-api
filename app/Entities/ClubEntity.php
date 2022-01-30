<?php

namespace App\Entities;

use App\Models\Club;
use App\Entities\Interfaces\ClubEntityInterface;

class ClubEntity implements ClubEntityInterface
{
    public function find(int $id): ?Club
    {
        return Club::find($id);
    }
}
