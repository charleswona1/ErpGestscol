<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationPeriodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluation_periode', function (Blueprint $table) {
            $table->bigIncrements('id_evaluation_periode');
            $table->unsignedBigInteger('id_matiere_classe');
            $table->unsignedBigInteger('id_annee_academique');
            $table->unsignedBigInteger('id_periode');
            $table->unsignedBigInteger('id_sous_periode');
            $table->unsignedBigInteger('id_evaluation');
            $table->date('date');
            $table->double('bareme');
            $table->double('pourcentage_periode')->nullable();
            $table->double('pourcentage_sous_periode')->nullable();
            $table->integer('numero');
            $table->text('commentaire');

            $table->foreign('id_matiere_classe')->references('id_matiere_classe')->on('matiere_classe');
            $table->foreign('id_annee_academique')->references('id_annee_academique')->on('annee_academique');
            $table->foreign('id_periode')->references('id_periode')->on('periode');
            $table->foreign('id_sous_periode')->references('id_sous_periode')->on('sous_periode');
            $table->foreign('id_evaluation')->references('id_evaluation')->on('evaluation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluation_periode');
    }
}
