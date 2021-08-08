<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRubriqueSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubrique_salarie', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_salarie');
            $table->unsignedBigInteger('id_rubrique');
            $table->unsignedBigInteger('id_profil_paye');
            $table->string('libelle', 255);
            $table->double('valeur')->nullable();

            $table->foreign('id_salarie')->references('id_salarie')->on('salarie');
            $table->foreign('id_rubrique')->references('id_rubrique')->on('rubrique');
            $table->foreign('id_profil_paye')->references('id_profil_paye')->on('profil_paye');
            $table->unique(['id_salarie', 'id_rubrique', 'id_profil_paye']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rubrique_salarie');
    }
}
