<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanctionPeriodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanction_periode', function (Blueprint $table) {
            $table->bigIncrements('id_sanction_periode');
            $table->unsignedBigInteger('id_classe_annee');
            $table->unsignedBigInteger('id_annee_academique');
            $table->unsignedBigInteger('id_periode');
            $table->unsignedBigInteger('id_sous_periode');
            $table->unsignedBigInteger('id_sanction');
            $table->unsignedBigInteger('id_matiere_classe');
            $table->date('date');
            $table->string('heure', 100);
            $table->boolean('est_valider', 10);
            $table->string('responsable', 255);
            $table->string('utilisateur', 255);
            $table->string('commentaire', 255)->nullable();

            $table->foreign('id_classe_annee')->references('id_classe_annee')->on('classe_annee');
            $table->foreign('id_annee_academique')->references('id_annee_academique')->on('annee_academique');
            $table->foreign('id_periode')->references('id_periode')->on('periode');
            $table->foreign('id_sous_periode')->references('id_sous_periode')->on('sous_periode');
            $table->foreign('id_sanction')->references('id_sanction')->on('sanction');
            $table->foreign('id_matiere_classe')->references('id_matiere_classe')->on('matiere_classe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanction_periode');
    }
}
