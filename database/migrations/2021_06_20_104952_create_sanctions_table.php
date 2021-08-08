<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanction', function (Blueprint $table) {
            $table->bigIncrements('id_sanction');
            $table->unsignedBigInteger('id_etablissement');
            $table->string('libelle', 100);
            $table->string('unite', 10)->nullable();
            $table->integer('seuil');
            $table->integer('degre');

            $table->foreign('id_etablissement')->references('id_etablissement')->on('etablissement');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanction');
    }
}
