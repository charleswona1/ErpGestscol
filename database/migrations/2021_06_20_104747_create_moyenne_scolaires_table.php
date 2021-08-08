<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoyenneScolairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moyenne_scolaire', function (Blueprint $table) {
            $table->bigIncrements('id_moyenne_scolaire');
            $table->string('libelle', 255);
            $table->unsignedBigInteger('id_etablissement');

            $table->foreign('id_etablissement')->references('id_etablissement')->on('etablissement');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moyenne_scolaire');
    }
}
