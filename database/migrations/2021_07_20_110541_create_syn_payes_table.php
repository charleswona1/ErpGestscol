<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSynPayesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syn_paye', function (Blueprint $table) {
            $table->bigIncrements('id_syn');
            $table->unsignedBigInteger('id_paye');
            $table->unsignedBigInteger('id_rubrique');
            $table->unsignedBigInteger('id_profil_paye');
            $table->string('code', 20);
            $table->string('libelle', 255);
            $table->double('valeur')->nullable();
            $table->double('qte')->nullable();
            $table->double('gains')->nullable();
            $table->double('retenues')->nullable();

            $table->foreign('id_paye')->references('id_paye')->on('paye');
            $table->foreign('id_rubrique')->references('id_rubrique')->on('rubrique');
            $table->foreign('id_profil_paye')->references('id_profil_paye')->on('profil_paye');
            $table->unique(['id_paye', 'id_rubrique', 'id_profil_paye']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('syn_paye');
    }
}
