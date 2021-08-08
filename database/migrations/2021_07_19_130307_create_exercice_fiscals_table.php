<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExerciceFiscalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercice_fiscal', function (Blueprint $table) {
            $table->bigIncrements('id_exercice');
            $table->unsignedBigInteger('id_etablissement')->unique();
            $table->integer('exercice');
            $table->boolean('status');
            $table->boolean('cloture');
            $table->date('debut');
            $table->date('fin');
            $table->string('mois_cloture')->nullable();

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
        Schema::dropIfExists('exercice_fiscal');
    }
}
