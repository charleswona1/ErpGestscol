<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetraitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retrait', function (Blueprint $table) {
            $table->bigIncrements('id_retrait');
            $table->unsignedBigInteger('id_etablissement');
            $table->string('code', 100)->unique();
            $table->string('libelle', 100)->unique();
            $table->double('prix');

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
        Schema::dropIfExists('retrait');
    }
}
