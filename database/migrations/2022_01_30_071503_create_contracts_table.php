<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_person');
            $table->foreign('id_person')->references('id')->on('people');

            $table->unsignedBigInteger('id_club');
            $table->foreign('id_club')->references('id')->on('clubs');

            $table->unsignedTinyInteger('years');
            $table->float('total', 10, 2);
            $table->float('clause', 10, 2);
            $table->date('start');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
