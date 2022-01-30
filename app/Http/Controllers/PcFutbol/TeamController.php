<?php

namespace App\Http\Controllers\Pcfutbol;

use Illuminate\Http\Request;
use App\Http\Controllers\PcFutbolController;
use App\Entities\Interfaces\TeamEntityInterface;

class TeamController extends PcFutbolController
{
    private TeamEntityInterface $teamEntity;
    public function __construct(TeamEntityInterface $teamEntity)
    {
        $this->teamEntity = $teamEntity;
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

        return response()->json(

            $this->teamEntity->newTeam($request['name'])
        );

    }
}
