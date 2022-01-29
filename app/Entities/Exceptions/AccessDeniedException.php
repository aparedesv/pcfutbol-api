<?php

namespace App\Entities\Exceptions;

use Exception;

class AccessDeniedException extends Exception
{
    public function __construct($message)
    {
        parent::__construct($message, 0, NULL);
    }
}
