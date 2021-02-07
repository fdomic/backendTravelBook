<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMuzejiCijenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muzeji_cijene', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_muzeji');
            $table->foreign('id_muzeji')->references('id')->on('muzeji');
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
        Schema::dropIfExists('muzeji_cijenes');
    }
}
