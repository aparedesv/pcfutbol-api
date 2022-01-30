<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTacticPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tactic_positions', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_tactic');
            $table->foreign('id_tactic')->references('id')->on('tactics');

            $table->unsignedBigInteger('id_position');
            $table->foreign('id_position')->references('id')->on('positions');

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
        Schema::dropIfExists('tactic_positions');
    }
}
