<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKluboviCijenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klubovi_cijene', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_klubovi');
            $table->foreign('id_klubovi')->references('id')->on('klubovi');

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
        Schema::dropIfExists('klubovi_cijenes');
    }
}
