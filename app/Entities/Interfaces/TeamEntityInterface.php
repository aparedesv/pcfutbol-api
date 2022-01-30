<?php

namespace App\Entities\Interfaces;

interface TeamEntityInterface
{
    public function newTeam(string $name, int $userId);
}
