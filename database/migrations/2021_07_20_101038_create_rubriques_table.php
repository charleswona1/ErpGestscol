<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRubriquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubrique', function (Blueprint $table) {
            $table->bigIncrements('id_rubrique');
            $table->unsignedBigInteger('id_etablissement');
            $table->unsignedBigInteger('id_categorie_rubrique');
            $table->unsignedBigInteger('id_organisme')->nullable();
            $table->integer('ordre');
            $table->string('nom', 100);
            $table->text('description');

            $table->foreign('id_etablissement')->references('id_etablissement')->on('etablissement');
            $table->foreign('id_categorie_rubrique')->references('id_categorie_rubrique')->on('categorie_rubrique');
            $table->foreign('id_organisme')->references('id_organisme')->on('organisme');
            $table->unique(['id_etablissement', 'ordre']);
            $table->unique(['id_etablissement', 'nom']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rubrique');
    }
}
