<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrzavasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drzave', function (Blueprint $table) {
            $table->id();
            $table->string('naziv_drzave');
            $table->string('glavni_grad');
            $table->string('sluzbeni_jezik');
            $table->string('predsjednik');
            $table->string('predsjednik_vlade');
            $table->string('neovisnost');
            $table->integer('povrsina');
            $table->integer('stanovnistvo');
            $table->string('valuta');
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
        Schema::dropIfExists('drzava');
    }
}
