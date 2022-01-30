<?php

namespace App\Entities;

use Faker\Factory;

use App\Models\Club;
use App\Models\Team;
use App\Models\Field;
use App\Models\Person;
use App\Models\Contract;
use App\Models\Location;
use App\Models\Position;
use App\Models\ClubTeams;
use App\Models\TeamPeople;
use App\Models\PersonAttributes;
use App\Models\PersonPositions;

use App\Entities\Interfaces\TeamEntityInterface;

class TeamEntity implements TeamEntityInterface
{
    public function newTeam(string $name, int $userId)
    {
        // preparem el Factory per generar dades
        $faker = Factory::create();

        // OJO!!! mirar com fer la transacció amb la BBDD

        // nou equip
        $dataEquip = [
            'name' => $name,
            'id_tactic' => 1,
            'id_brand' => 1,
        ];

        $team = Team::create($dataEquip);

        // ubicació
        $dataUbicacio = [
            'id_country' => 1, // aqui es podria fer un random dels ids de la taula paisos??
            'direction' => $faker->streetAddress(),
            'pcode' => $faker->postcode(),
            'town' => $faker->city(),
            'state' => $faker->state(),
        ];

        $location = Location::create($dataUbicacio);

        // camp
        $dataCamp = [
            'id_location' => $location->id,
            'name' => $faker->words(2, true),
            'capacity' => CAPACITAT_INICIAL_CAMP_EQUIP_NOU,
        ];

        Field::create($dataCamp);

        // club
        $dataClub = [
            'id_location' => $location->id,
            'name' => $name,
            'balance' => SALDO_INICIAL_CLUB_NOU,
        ];

        $club = Club::create($dataClub);

        // equips club
        $dataEquipsClub = [
            'id_team' => $team->id,
            'id_club' => $club->id,
        ];

        ClubTeams::create($dataEquipsClub);

        // jugadors i posicions
        $positions = Position::pluck('id')->toArray();

        for ($i = 0; $i < NUMERO_JUGADORS_EQUIP_NOU; $i++)
        {
            $dataNaixement = $faker->dateTimeBetween('-38 year', '-15 year');
            // jugadors
            $dataJugador = [
                'id_role' => ROL_JUGADOR,
                'name' => $faker->firstName('male'),
                'surnames' => $faker->lastName(),
                'birthdate' => $dataNaixement->format('Y-m-d'),
            ];

            $player = Person::create($dataJugador);

            // persones equip
            $dataJugadorEquip = [
                'id_team' => $team->id,
                'id_person' => $player->id,
                'order' => $i
            ];

            TeamPeople::create($dataJugadorEquip);

            $anys = rand(1, 5);
            $import = $anys * 15000;
            $dataContracteJugador = [
                'id_person' => $player->id,
                'id_club' => $club->id,
                'start' => date('Y-m-d'),
                'years' => $anys,
                'total' => $import,
                'clause' => $import * 4,
            ];

            Contract::create($dataContracteJugador);

            $dataAtributsJugador = [
                'id_person' => $player->id,
                'technique' => rand(40, 69),
                'aggressiveness' => rand(40, 99),
                'speed' => rand(40, 99),
                'fitness' => rand(40, 69),
                'moral' => rand(40, 99),
            ];

            PersonAttributes::create($dataAtributsJugador);

            shuffle($positions);
            $numPosicionsJugador = rand(1, 5);
            for($a=0; $a<$numPosicionsJugador; $a++)
            {
                $dataPosicionsJugador = [
                    'id_person' => $player->id,
                    'id_position' => $positions[$a],
                ];

                PersonPositions::create($dataPosicionsJugador);
            }

        }

        $dataNaixementEntrenador = $faker->dateTimeBetween('-68 year', '-18 year');
        // entrenador
        $dataEntrenador = [
            'id_role' => 3,
            'name' => $faker->firstName(),
            'surnames' => $faker->lastName(),
            'birthdate' => $dataNaixementEntrenador->format('Y-m-d'),
        ];

        $coach = Person::create($dataEntrenador);

        $anys = rand(1, 5);
        $import = $anys * 10000;
        $dataContracteEntrenador = [
            'id_person' => $coach->id,
            'id_club' => $club->id,
            'start' => date('Y-m-d'),
            'years' => $anys,
            'total' => $import,
            'clause' => $import * 4,
        ];

        Contract::create($dataContracteEntrenador);

        // persones equip
        $dataEntrenadorEquip = [
            'id_team' => $team->id,
            'id_person' => $coach->id,
        ];

        TeamPeople::create($dataEntrenadorEquip);

        return $team;
    }
}
