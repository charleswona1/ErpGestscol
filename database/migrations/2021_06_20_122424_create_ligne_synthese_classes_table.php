<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLigneSyntheseClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ligne_synthese_classe', function (Blueprint $table) {
            $table->unsignedBigInteger('id_synthese_classe');
            $table->unsignedBigInteger('id_matiere_classe');
            $table->string('nom_matiere', 255)->nullable();
            $table->string('nom_enseignant', 255)->nullable();
            $table->double('moy_classe')->nullable();
            $table->double('moy_min')->nullable();
            $table->double('moy_max')->nullable();

            $table->foreign('id_synthese_classe')->references('id_synthese_classe')->on('synthese_classe');
            $table->foreign('id_matiere_classe')->references('id_matiere_classe')->on('matiere_classe');

            $table->primary(['id_synthese_classe', 'id_matiere_classe'], 'id_ligne_synthese_classe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ligne_synthese_classe');
    }
}
