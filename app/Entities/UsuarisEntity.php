<?php

namespace App\Entities;

use App\Entities\Interfaces\UsuarisEntityInterface;
use App\Models\Usuaris;

class UsuarisEntity implements UsuarisEntityInterface
{
    public function getAll()
    {
        return Usuaris::All();
    }
}
