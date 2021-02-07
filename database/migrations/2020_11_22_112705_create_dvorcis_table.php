<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDvorcisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dvorci', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_grada');
            $table->foreign('id_grada')->references('id')->on('gradovi');

            $table->string('ime_gradevine');
            $table->string('arhitekt')->nullable();
            $table->string('godina_izgradnje');
            $table->string('opis_kraci')->nullable();
            $table->string('opis_duzi')->nullable();
            $table->string('adresa')->nullable();
            $table->string('sluzbena_stranica')->nullable();
            $table->string('slika')->nullable();

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
        Schema::dropIfExists('opere');
    }
}
