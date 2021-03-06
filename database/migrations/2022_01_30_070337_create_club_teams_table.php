<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club_teams', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_team');
            $table->foreign('id_team')->references('id')->on('teams');

            $table->unsignedBigInteger('id_club');
            $table->foreign('id_club')->references('id')->on('clubs');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('club_teams');
    }
}
