<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasseAnneesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classe_annee', function (Blueprint $table) {
            $table->bigIncrements('id_classe_annee');
            $table->unsignedBigInteger('id_classe');
            $table->unsignedBigInteger('id_annee_academique');
            $table->unsignedBigInteger('id_enseignant');
            $table->string('nom', 255);
            $table->integer('effectif');
            $table->integer('ordre');
            $table->string('nom_niveau', 50);
            $table->string('nom_cycle', 50);
            

            $table->foreign('id_classe')->references('id_classe')->on('classe');
            $table->foreign('id_annee_academique')->references('id_annee_academique')->on('annee_academique');
            $table->foreign('id_enseignant')->references('id_enseignant')->on('enseignant');

            $table->unique(['id_classe', 'id_annee_academique']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classe_annee');
    }
}
