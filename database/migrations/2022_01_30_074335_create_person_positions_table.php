<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_positions', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_position');
            $table->foreign('id_position')->references('id')->on('positions');

            $table->unsignedBigInteger('id_person');
            $table->foreign('id_person')->references('id')->on('people');

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
        Schema::dropIfExists('person_positions');
    }
}
