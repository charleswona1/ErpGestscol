<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElementPayesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('element_paye', function (Blueprint $table) {
            $table->bigIncrements('id_element');
            $table->unsignedBigInteger('id_etablissement');
            $table->integer('code');
            $table->string('nom', 255);
            $table->string('description', 255);
            $table->string('type', 50);
            $table->string('type_donnee', 50);
            $table->string('valeur_defaut', 20)->nullable();

            $table->foreign('id_etablissement')->references('id_etablissement')->on('etablissement');
            $table->unique(['id_etablissement', 'code']);
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
        Schema::dropIfExists('element_paye');
    }
}
