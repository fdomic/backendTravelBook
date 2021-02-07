<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKazalistaCijenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kazalista_cijene', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_kazalista');
            $table->foreign('id_kazalista')->references('id')->on('kazalista');

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
        Schema::dropIfExists('kazalista_cijenes');
    }
}
