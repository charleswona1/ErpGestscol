<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matiere', function (Blueprint $table) {
            $table->bigIncrements('id_matiere');
            $table->unsignedBigInteger('id_annee_academique');
            $table->string('nom', 255);
            $table->string('abreviation', 15);

            $table->foreign('id_annee_academique')->references('id_annee_academique')->on('annee_academique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matiere');
    }
}
