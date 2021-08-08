<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatiereClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matiere_classe', function (Blueprint $table) {
            $table->bigIncrements('id_matiere_classe');
            $table->unsignedBigInteger('id_matiere_niveau');
            $table->unsignedBigInteger('id_classe_annee');
            $table->unsignedBigInteger('id_enseignant');
            $table->string('nom_matiere', 255);
            $table->string('abreviation', 15);

            $table->foreign('id_matiere_niveau')->references('id_matiere_niveau')->on('matiere_niveau');
            $table->foreign('id_classe_annee')->references('id_classe_annee')->on('classe_annee');
            $table->foreign('id_enseignant')->references('id_enseignant')->on('enseignant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matiere_classe');
    }
}
