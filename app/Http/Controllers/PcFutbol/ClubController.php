<?php

namespace App\Http\Controllers\Pcfutbol;

use App\Http\Controllers\PcFutbolController;
use App\Entities\Interfaces\ClubEntityInterface;

class ClubController extends PcFutbolController
{
    private ClubEntityInterface $clubEntity;
    public function __construct(ClubEntityInterface $clubEntity)
    {
        $this->clubEntity = $clubEntity;
    }

    public function show(int $id)
    {
        $result = $this->clubEntity->find($id);
        if($result)
        {
            return $result;
        }

        return response('Club not found', 404);
    }
}
