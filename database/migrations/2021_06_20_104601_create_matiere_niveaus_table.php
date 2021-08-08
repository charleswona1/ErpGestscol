<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatiereNiveausTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matiere_niveau', function (Blueprint $table) {
            $table->bigIncrements('id_matiere_niveau');
            $table->unsignedBigInteger('id_matiere');
            $table->unsignedBigInteger('id_niveau_scolaire');
            $table->unsignedBigInteger('id_groupe_matiere');
            $table->integer('coefficient');

            $table->foreign('id_niveau_scolaire')->references('id_niveau')->on('niveau_scolaire');
            $table->foreign('id_matiere')->references('id_matiere')->on('matiere');
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
        Schema::dropIfExists('matiere_niveau');
    }
}
