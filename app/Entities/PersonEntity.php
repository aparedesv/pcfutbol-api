<?php

namespace App\Entities;

use App\Models\Person;
use Illuminate\Pagination\Paginator;
use App\Entities\Interfaces\PersonEntityInterface;

class PersonEntity implements PersonEntityInterface
{
    public function paginate(int $take): Paginator
    {
        return Person:: orderBy('surnames')
                        ->orderBy('name')
                        ->simplePaginate($take);
    }
}
