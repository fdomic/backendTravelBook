<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoznataDijelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poznata_dijela', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_muzeja');
            $table->foreign('id_muzeja')->references('id')->on('muzeji');

            $table->string('ime')->nullable();
            $table->string('tvorac_dijela')->nullable();
            $table->string('opis_kraci')->nullable();
            $table->string('opis_duzi')->nullable();
            $table->string('datum')->nullable();
            $table->string('slika')->nullable();

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
        Schema::dropIfExists('poznata_dijela');
    }
}
