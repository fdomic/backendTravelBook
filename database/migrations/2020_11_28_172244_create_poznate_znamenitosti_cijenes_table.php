<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoznateZnamenitostiCijenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poznate_znamenitosti_cijene', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_poznate_znamenitosti');
            $table->foreign('id_poznate_znamenitosti')->references('id')->on('poznate_znamenitosti');

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
        Schema::dropIfExists('poznate_znamenitosti_cijenes');
    }
}
