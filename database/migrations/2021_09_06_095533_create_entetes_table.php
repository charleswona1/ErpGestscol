<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entete', function (Blueprint $table) {
            $table->bigIncrements('id_entete');
            $table->unsignedBigInteger('id_etablissement');
            $table->string('eng_gauche', 255)->nullable();
            $table->string('eng_droit', 255)->nullable();

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
        Schema::dropIfExists('entete');
    }
}
