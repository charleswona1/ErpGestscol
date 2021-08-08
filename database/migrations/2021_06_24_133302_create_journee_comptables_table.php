<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJourneeComptablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journee_comptable', function (Blueprint $table) {
            $table->bigIncrements('id_journee');
            $table->unsignedBigInteger('id_annee_academique');
            $table->unsignedBigInteger('id_user');
            $table->date('date_ouverture');
            $table->time('heure_ouverture');
            $table->dateTime('date_fermeture')->nullable();

            $table->foreign('id_annee_academique')->references('id_annee_academique')->on('annee_academique');
            $table->foreign('id_user')->references('id_user')->on('users');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journee_comptable');
    }
}
