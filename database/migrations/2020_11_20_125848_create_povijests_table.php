<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePovijestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('povijest', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_drzave')->nullable();
            $table->foreign('id_drzave')->references('id')->on('drzave');
            
            $table->unsignedBigInteger('id_grada')->nullable();
            $table->foreign('id_grada')->references('id')->on('gradovi');

            $table->string('razdoblje');
            $table->string('opis');
           

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
        Schema::dropIfExists('povijest');
    }
}
