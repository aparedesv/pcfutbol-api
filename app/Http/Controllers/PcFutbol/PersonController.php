<?php

namespace App\Http\Controllers\Pcfutbol;

use App\Http\Controllers\PcFutbolController;
use App\Entities\Interfaces\PersonEntityInterface;

class PersonController extends PcFutbolController
{
    private PersonEntityInterface $personEntity;
    public function __construct(PersonEntityInterface $personEntity)
    {
        $this->personEntity = $personEntity;
    }

    public function index()
    {
        return $this->personEntity->paginate(ITEMS_PAGINACIO);
    }
}
