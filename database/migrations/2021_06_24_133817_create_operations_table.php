<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operation', function (Blueprint $table) {
            $table->bigIncrements('id_operation');
            $table->unsignedBigInteger('id_guichet');
            $table->unsignedBigInteger('id_compte');
            $table->unsignedBigInteger('id_groupe_compte');
            $table->unsignedBigInteger('id_annee_academique');
            $table->unsignedBigInteger('id_recette')->nullable();
            $table->unsignedBigInteger('id_retrait')->nullable();
            $table->double('debit');
            $table->double('credit');
            $table->dateTime('date_operation')->nullable();
            $table->string('numero', 20)->unique();
            $table->double('reste');
            $table->integer('quantite');
            $table->string('montant_lettre', 255);
            $table->string('utilisateur', 100);

            $table->foreign('id_annee_academique')->references('id_annee_academique')->on('annee_academique');
            $table->foreign('id_guichet')->references('id_guichet')->on('guichet');
            $table->foreign('id_groupe_compte')->references('id_groupe_compte')->on('groupe_compte');
            $table->foreign('id_compte')->references('id_compte')->on('compte');
            $table->foreign('id_recette')->references('id_recette')->on('recette');
            $table->foreign('id_retrait')->references('id_retrait')->on('retrait');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operation');
    }
}
