<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePretsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pret', function (Blueprint $table) {
            $table->bigIncrements('id_pret');
            $table->unsignedBigInteger('id_salarie');
            $table->string('libelle', 255);
            $table->string('type_acte', 255)->nullable();
            $table->boolean('externe');
            $table->date('date_pret');
            $table->date('debut_remb');
            $table->integer('mensualite');
            $table->double('montant');
            $table->string('status', 100);
            $table->double('reste');
            $table->double('montant_mensualite')->nullable();
            $table->double('taux_annuel')->nullable();

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
        Schema::dropIfExists('pret');
    }
}
