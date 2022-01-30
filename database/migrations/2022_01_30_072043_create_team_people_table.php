<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_people', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_team');
            $table->foreign('id_team')->references('id')->on('teams');

            $table->unsignedBigInteger('id_person');
            $table->foreign('id_person')->references('id')->on('people');

            $table->unsignedTinyInteger('order')->nullable();
            $table->string('active_position', 2)->nullable();
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
        Schema::dropIfExists('team_people');
    }
}
