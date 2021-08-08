<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRubriqueProprietesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubrique_propriete', function (Blueprint $table) {
            $table->unsignedBigInteger('id_propriete');
            $table->unsignedBigInteger('id_rubrique');
            $table->string('valeur', 100)->nullable();

            $table->foreign('id_propriete')->references('id_propriete')->on('propriete');
            $table->foreign('id_rubrique')->references('id_rubrique')->on('rubrique');
            $table->primary(['id_rubrique', 'id_propriete']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rubrique_propriete');
    }
}
