<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Name');
            $table->string('Summary');
            $table->string('Year');
            $table->string('Images');
            $table->string('Director');
            $table->string('Trailer');
            $table->string('Type');
            $table->string('FK_Casts');
            $table->string('FK_Genres');
           /*  $table->string('completed'); */
           /*  $table->timestamps(); */
        });

        Schema::create('casts', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Name');
            $table->string('Country');
            $table->string('Age');
            $table->string('FK_Movies');
           /*  $table->string('completed'); */
           /*  $table->timestamps(); */
        });

        Schema::create('Genres', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Name');
        });

        Schema::create('movie_casts', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('FK_Movies');
            $table->string('FK_Casts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
        Schema::dropIfExists('casts');
    }
}
