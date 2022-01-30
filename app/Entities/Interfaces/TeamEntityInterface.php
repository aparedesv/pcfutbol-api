<?php

namespace App\Entities\Interfaces;

use App\Models\Team;

interface TeamEntityInterface
{
    public function find(int $id): ?Team;
    public function newTeam(string $name, int $userId);
}
