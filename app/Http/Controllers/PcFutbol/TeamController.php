<?php

namespace App\Http\Controllers\Pcfutbol;

use App\Entities\AuthEntity;
use Illuminate\Http\Request;
use App\Http\Controllers\PcFutbolController;
use App\Entities\Interfaces\TeamEntityInterface;
use App\Entities\Interfaces\AuthEntityInterface;

class TeamController extends PcFutbolController
{
    private TeamEntityInterface $teamEntity;
    private AuthEntityInterface $authEntity;
    public function __construct(TeamEntityInterface $teamEntity, AuthEntityInterface $authEntity)
    {
        $this->teamEntity = $teamEntity;
        $this->authEntity = $authEntity;
    }

    public function index()
    {
        return 'equip index';
    }

    public function show(int $id)
    {
        $result = $this->teamEntity->find($id);
        if($result)
        {
            return $result;
        }

        return response('Team not found', 404);
    }

    public function insert(Request $request)
    {
        // validem el request
        $this->validate($request, [
            'name' => 'required|min:2|max:100',
        ]);

        // obtenim el id del usuari amb el token
        $userId = $this->authEntity->checkToken($request->header('Authorization'));

        return response()->json(

            $this->teamEntity->newTeam($request['name'], $userId)
        );

    }
}
