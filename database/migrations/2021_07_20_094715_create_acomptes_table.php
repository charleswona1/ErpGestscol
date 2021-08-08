<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcomptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acompte', function (Blueprint $table) {
            $table->bigIncrements('id_acompte');
            $table->unsignedBigInteger('id_salarie');
            $table->dateTime('date_acompte');
            $table->double('montant');
            $table->integer('mois');
            $table->integer('annee');

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
        Schema::dropIfExists('acompte');
    }
}
