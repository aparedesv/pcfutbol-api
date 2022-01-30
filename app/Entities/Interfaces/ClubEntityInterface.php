<?php

namespace App\Entities\Interfaces;

use App\Models\Club;

interface ClubEntityInterface
{
    public function find(int $id): ?Club;
}
