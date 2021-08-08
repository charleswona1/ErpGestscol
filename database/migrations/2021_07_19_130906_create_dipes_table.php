<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dipe', function (Blueprint $table) {
            $table->bigIncrements('id_dipe');
            $table->unsignedBigInteger('id_exercice');
            $table->integer('ordre');
            $table->string('libelle', 100);

            $table->foreign('id_exercice')->references('id_exercice')->on('exercice_fiscal');
            $table->unique(['id_exercice', 'libelle']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dipe');
    }
}
