<?php

namespace App\Http\Controllers;

use App\Entities\Interfaces\UsuarisEntityInterface;

class UsuarisController extends Controller
{
    private UsuarisEntityInterface $usuarisEntity;

    public function __construct(UsuarisEntityInterface $usuarisEntity)
    {
        $this->usuarisEntity = $usuarisEntity;
    }

    public function index()
    {
        return $this->usuarisEntity->getAll();
    }
}
