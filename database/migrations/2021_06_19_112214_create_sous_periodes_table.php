<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSousPeriodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sous_periode', function (Blueprint $table) {
            $table->bigIncrements('id_sous_periode');
            $table->unsignedBigInteger('id_periode');
            $table->integer('numero');
            $table->date('date_debut');
            $table->date('date_fin');
            

            $table->foreign('id_periode')->references('id_periode')->on('periode');

            $table->unique(['id_periode', 'numero']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sous_periode');
    }
}
