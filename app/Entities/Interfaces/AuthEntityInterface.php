<?php

namespace App\Entities\Interfaces;

interface AuthEntityInterface
{
    public function signIn(string $email, string $password);
}
