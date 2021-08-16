<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnneeAcademiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annee_academique', function (Blueprint $table) {
            $table->bigIncrements('id_annee_academique');
            $table->unsignedBigInteger('id_etablissement');
            $table->string('nom', 255);
            $table->date('date_debut');
            $table->date('date_fin');
            $table->boolean('est_verrouiller');
            $table->boolean('est_cloturer');
            $table->boolean('par_defaut');
            $table->foreign('id_etablissement')->references('id_etablissement')->on('etablissement');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annee_academique');
    }
}
