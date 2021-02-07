<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradovisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gradovi', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('id_drzave')->nullable();

            $table->foreign('id_drzave')->references('id')->on('drzave');
            
            $table->string('naziv_grada');
            $table->string('gradonacelnik');
            $table->integer('povrsina');
            $table->string('nadmorska_visina');
            $table->integer('stanovnistvo');
            $table->integer('postanski_broj');
            $table->integer('pozivni_broj');
            $table->string('slika');
            $table->string('sluzbena_stranica');

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
        Schema::dropIfExists('gradovi');
    }
}
