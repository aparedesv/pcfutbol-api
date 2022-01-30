<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Entities\Interfaces\AuthEntityInterface;
use App\Entities\Exceptions\AccessDeniedException;

class AuthController extends Controller
{
    private AuthEntityInterface $authEntity;
    public function __construct(AuthEntityInterface $authEntity)
    {
        $this->authEntity = $authEntity;
    }

    public function signIn(Request $request)
    {
        try {

            return response()->json(

                $this->authEntity->signIn(
                    $request->input('email'),
                    base64_decode($request->input('password')),
                )

            );
        } catch(AccessDeniedException $ex) {

            return response($ex->getMessage(), 400);
        }
    }

    public function test()
    {
        return Auth::user();
    }
}
