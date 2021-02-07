<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJavniPrijevozCijenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('javni_prijevoz_cijene', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_javni_prijevoz');
            $table->foreign('id_javni_prijevoz')->references('id')->on('javni_prijevoz');

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
        Schema::dropIfExists('javni_prijevoz_cijenes');
    }
}
