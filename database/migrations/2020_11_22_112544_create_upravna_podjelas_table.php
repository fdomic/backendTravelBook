<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpravnaPodjelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upravna_podjela', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_drzave');
            $table->foreign('id_drzave')->references('id')->on('drzave');

            $table->string('savezne_drzave_zupanije');
            $table->integer('stanovnistvo');
            $table->integer('povrsina');
          

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
        Schema::dropIfExists('upravna_podjela');
    }
}
