<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupeMatieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupe_matiere', function (Blueprint $table) {
            $table->bigIncrements('id_groupe_matiere');
            $table->unsignedBigInteger('id_niveau_scolaire');
            $table->unsignedBigInteger('id_annee_academique');
            $table->string('nom', 100);
            $table->integer('numero');

            $table->foreign('id_niveau_scolaire')->references('id_niveau')->on('niveau_scolaire');
            $table->foreign('id_annee_academique')->references('id_annee_academique')->on('annee_academique');

            $table->unique(['id_annee_academique', 'nom']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groupe_matiere');
    }
}
