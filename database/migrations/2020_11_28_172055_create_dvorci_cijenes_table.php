<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDvorciCijenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dvorci_cijene', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_dvorci');
            $table->foreign('id_dvorci')->references('id')->on('dvorci');

            $table->string( 'karta');
            $table->string('opis');
            $table->integer('trajanje_karte');
            $table->integer('cijena');
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
        Schema::dropIfExists('opere_cijenes');
    }
}
