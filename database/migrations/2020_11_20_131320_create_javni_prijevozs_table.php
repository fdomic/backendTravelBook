<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJavniPrijevozsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('javni_prijevoz', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_grada');
            $table->foreign('id_grada')->references('id')->on('gradovi');

            
            $table->string('vrsta_prijevoza');

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
        Schema::dropIfExists('javni_prijevoz');
    }
}
