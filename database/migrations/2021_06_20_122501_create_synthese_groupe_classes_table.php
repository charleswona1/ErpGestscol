<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSyntheseGroupeClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('synthese_groupe_classe', function (Blueprint $table) {
            $table->unsignedBigInteger('id_synthese_classe');
            $table->unsignedBigInteger('id_groupe_matiere');
            $table->string('libelle', 255)->nullable();
            $table->integer('numero')->nullable();
            $table->double('moy_classe')->nullable();
            $table->double('moy_min')->nullable();
            $table->double('moy_max')->nullable();

            $table->foreign('id_synthese_classe')->references('id_synthese_classe')->on('synthese_classe');
            $table->foreign('id_groupe_matiere')->references('id_groupe_matiere')->on('groupe_matiere');

            $table->primary(['id_synthese_classe', 'id_groupe_matiere'], 'id_synthese_groupe_classe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('synthese_groupe_classe');
    }
}
