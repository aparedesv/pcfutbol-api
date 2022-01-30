<?php

namespace App\Entities\Interfaces;

use Illuminate\Pagination\Paginator;

interface PersonEntityInterface
{
    public function paginate(int $take): Paginator;
}
