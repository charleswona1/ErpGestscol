<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppreciationNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appreciation_note', function (Blueprint $table) {
            $table->bigIncrements('id_appreciation');
            $table->unsignedBigInteger('id_annee_academique');
            $table->string('libelle', 255);
            $table->double('note_min');
            $table->double('note_max');

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
        Schema::dropIfExists('appreciation_note');
    }
}
