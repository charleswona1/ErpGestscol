<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paye', function (Blueprint $table) {
            $table->bigIncrements('id_paye');
            $table->unsignedBigInteger('id_salarie');
            $table->unsignedBigInteger('id_exercice');
            $table->integer('mois');
            $table->double('montant');
            $table->dateTime('date_calcul');
            $table->dateTime('date_paiement')->nullable();

            $table->foreign('id_salarie')->references('id_salarie')->on('salarie');
            $table->foreign('id_exercice')->references('id_exercice')->on('exercice_fiscal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paye');
    }
}
