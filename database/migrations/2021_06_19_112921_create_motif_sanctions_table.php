<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotifSanctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motif_sanction', function (Blueprint $table) {
            $table->bigIncrements('id_motif');
            $table->unsignedBigInteger('id_annee_academique');
            $table->string('libelle', 255);

            $table->foreign('id_annee_academique')->references('id_annee_academique')->on('annee_academique');

            $table->unique(['id_annee_academique', 'libelle']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motif_sanction');
    }
}
