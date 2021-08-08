<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompteGroupeComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compte_groupe_compte', function (Blueprint $table) {
            $table->unsignedBigInteger('id_compte');
            $table->unsignedBigInteger('id_groupe_compte');
            $table->unsignedBigInteger('id_annee_academique')->nullable();
            $table->double('solde');
            $table->double('total');
            $table->boolean('ecriture');
            $table->double('remise');

            $table->foreign('id_annee_academique')->references('id_annee_academique')->on('annee_academique');
            $table->foreign('id_groupe_compte')->references('id_groupe_compte')->on('groupe_compte');
            $table->foreign('id_compte')->references('id_compte')->on('compte');

            $table->primary(['id_compte', 'id_groupe_compte', 'id_annee_academique'], 'id_compte_groupe_compte');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compte_groupe_compte');
    }
}
