<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupe', function (Blueprint $table) {
            $table->bigIncrements('id_groupe');
            $table->unsignedBigInteger('id_annee_academique');
            $table->string('nom', 255);
            $table->integer('effectif');
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
        Schema::dropIfExists('groupe');
    }
}
