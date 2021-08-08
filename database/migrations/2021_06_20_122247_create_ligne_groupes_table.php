<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLigneGroupesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ligne_groupe', function (Blueprint $table) {
            $table->unsignedBigInteger('id_synthese_classe');
            $table->unsignedBigInteger('id_apprenant_classe');
            $table->unsignedBigInteger('id_groupe_matiere');
            $table->double('somme_point')->nullable();
            $table->integer('somme_coef')->nullable();
            $table->double('moy_groupe')->nullable();

            $table->foreign('id_synthese_classe')->references('id_synthese_classe')->on('synthese_classe');
            $table->foreign('id_groupe_matiere')->references('id_groupe_matiere')->on('groupe_matiere');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ligne_groupe');
    }
}
