<?php

namespace App\Repositories;

use App\Repositories\Interfaces\UsuarisRepositoryInterface;
use App\Models\Usuaris;

class UsuarisRepository implements UsuarisRepositoryInterface
{
    public function getAll()
    {
        return Usuaris::All();
    }
}
