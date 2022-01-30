<?php

namespace App\Entities;

use App\Entities\Exceptions\AccessDeniedException;
use App\Models\User;
use Illuminate\Support\Str;
use App\Entities\Interfaces\AuthEntityInterface;
use Carbon\Carbon;

class AuthEntity implements AuthEntityInterface
{
    public function signIn(string $email, string $password)
    {
        // busquem l'usuari per email
        $entry = User::where('email', $email)->first();

        if($entry)
        {
            // comparem password
            if(md5($password) == $entry->password)
            {
                $entry->api_token = Str::random(100);
                $entry->api_token_expiration = Carbon::now()->addHours(10);

                $entry->save();

                return [
                    'access_token' => $entry->api_token,
                    'expiration' => $entry->api_token_expiration,
                    'user' => [
                        'id' => $entry->id,
                        'name' => $entry->name,
                        'email' => $entry->email,
                    ],
                ];
            }
        }

        throw new AccessDeniedException('access denied!');
    }

    public function checkToken(string $token)
    {
        // busquem l'usuari per token
        $token = explode(' ', $token)[1];
        $entry = User::where('api_token', $token)->first();

        if($entry)
        {
            return $entry->id;
        }

        throw new AccessDeniedException('no valid user!');
    }
}
