<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParametrageSanctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametrage_sanction', function (Blueprint $table) {
            $table->bigIncrements('id_parametrage');
            $table->unsignedBigInteger('id_cycle');
            $table->unsignedBigInteger('id_sanction');
            $table->integer('id_sanction2');
            $table->string('libelle2', 255);
            $table->integer('valeur')->nullable();
            $table->integer('valeur2')->nullable();

            $table->foreign('id_cycle')->references('id_cycle')->on('cycle');
            $table->foreign('id_sanction')->references('id_sanction')->on('sanction');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parametrage_sanction');
    }
}
