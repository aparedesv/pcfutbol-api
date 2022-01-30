<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_attributes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_person');
            $table->foreign('id_person')->references('id')->on('people');

            $table->string('technique', 2);
            $table->string('aggressiveness', 2);
            $table->string('speed', 2);
            $table->string('fitness', 2);
            $table->string('moral', 2);

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
        Schema::dropIfExists('person_attributes');
    }
}
