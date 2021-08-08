<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemboursementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remboursement', function (Blueprint $table) {
            $table->bigIncrements('id_remb');
            $table->unsignedBigInteger('id_salarie');
            $table->unsignedBigInteger('id_pret');
            $table->unsignedBigInteger('id_exercice');
            $table->string('numero', 100);
            $table->date('date_remb');
            $table->integer('mois');
            $table->double('montant');

            $table->foreign('id_salarie')->references('id_salarie')->on('salarie');
            $table->foreign('id_pret')->references('id_pret')->on('pret');
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
        Schema::dropIfExists('remboursement');
    }
}
