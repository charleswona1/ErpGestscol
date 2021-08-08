<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSyntheseClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('synthese_classe', function (Blueprint $table) {
            $table->bigIncrements('id_synthese_classe');
            $table->unsignedBigInteger('id_classe_annee');
            $table->unsignedBigInteger('id_annee_academique');
            $table->unsignedBigInteger('id_periode')->nullable();
            $table->unsignedBigInteger('id_sous_periode')->nullable();
            $table->double('moy_classe')->nullable();
            $table->double('moy_max')->nullable();
            $table->double('moy_min')->nullable();
            $table->integer('effectif')->nullable();

            $table->foreign('id_classe_annee')->references('id_classe_annee')->on('classe_annee');
            $table->foreign('id_annee_academique')->references('id_annee_academique')->on('annee_academique');
            $table->foreign('id_periode')->references('id_periode')->on('periode');
            $table->foreign('id_sous_periode')->references('id_sous_periode')->on('sous_periode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('synthese_classe');
    }
}
