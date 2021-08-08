<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLigneSynthesesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ligne_synthese', function (Blueprint $table) {
            $table->unsignedBigInteger('id_synthese_classe');
            $table->unsignedBigInteger('id_apprenant_classe');
            $table->unsignedBigInteger('id_matiere_classe');
            $table->unsignedBigInteger('id_groupe_matiere')->nullable();
            $table->double('total_point')->nullable();
            $table->integer('coefficient')->nullable();
            $table->double('moyenne')->nullable();
            $table->string('rang', 255)->nullable();
            $table->string('appreciation', 255)->nullable();
            $table->string('detail', 255)->nullable();

            $table->foreign('id_synthese_classe')->references('id_synthese_classe')->on('synthese_classe');
            $table->foreign('id_matiere_classe')->references('id_matiere_classe')->on('matiere_classe');
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
        Schema::dropIfExists('ligne_synthese');
    }
}
