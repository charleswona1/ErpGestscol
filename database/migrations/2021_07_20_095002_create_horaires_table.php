<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horaire', function (Blueprint $table) {
            $table->bigIncrements('id_horaire');
            $table->unsignedBigInteger('id_salarie');
            $table->time('debut_matin')->nullable();
            $table->time('fin_matin')->nullable();
            $table->time('debut_aprem')->nullable();
            $table->time('fin_aprem')->nullable();
            $table->time('debut_nuit')->nullable();
            $table->time('fin_nuit')->nullable();
            $table->integer('heures');
            $table->integer('jour');
            $table->integer('mois');
            $table->integer('annee');
            $table->date('date_enregistrement');

            $table->foreign('id_salarie')->references('id_salarie')->on('salarie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horaire');
    }
}
