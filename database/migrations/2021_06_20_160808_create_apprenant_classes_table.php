<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprenantClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprenant_classe', function (Blueprint $table) {
            $table->bigIncrements('id_apprenant_classe');
            $table->unsignedBigInteger('id_apprenant');
            $table->unsignedBigInteger('id_classe_annee');
            $table->string('nom', 255);
            $table->integer('numero');
            $table->binary('photo')->nullable();
            $table->string('ancien', 20)->nullable();
            $table->boolean('interne')->nullable();
            $table->string('precedent_etablissement', 255)->nullable();
            $table->string('precedent_niveau', 50)->nullable();
            $table->string('precedente_classe', 50)->nullable();
            $table->boolean('redouble')->nullable();
            $table->string('decision', 100)->nullable();
            $table->string('next_classe', 50)->nullable();

            $table->foreign('id_apprenant')->references('id_apprenant')->on('apprenant');
            $table->foreign('id_classe_annee')->references('id_classe_annee')->on('classe_annee');

            $table->unique(['id_apprenant', 'id_classe_annee']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apprenant_classe');
    }
}
