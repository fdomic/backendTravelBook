<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZemljopisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zemljopis', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_drzave');
            $table->foreign('id_drzave')->references('id')->on('drzave');

            $table->string('reljef_tekst')->nullable();
            $table->string('klima_tekst')->nullable();
            $table->string('flora_tekst')->nullable();
            $table->string('rijeke_tekst')->nullable();

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
        Schema::dropIfExists('zemljopis');
    }
}
