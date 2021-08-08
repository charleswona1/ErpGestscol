<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnfantSalairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enfant_salaire', function (Blueprint $table) {
            $table->bigIncrements('id_enfant');
            $table->unsignedBigInteger('id_salarie');
            $table->string('numero', 255);
            $table->string('nom', 255);
            $table->date('date_naiss');
            $table->boolean('compter');

            $table->foreign('id_salarie')->references('id_salarie')->on('salarie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enfant_salaire');
    }
}
