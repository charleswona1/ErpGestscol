<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direction', function (Blueprint $table) {
            $table->bigIncrements('id_direction');
            $table->unsignedBigInteger('id_etablissement');
            $table->string('libelle', 100);

            $table->foreign('id_etablissement')->references('id_etablissement')->on('etablissement');
            $table->unique(['id_etablissement', 'libelle']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('direction');
    }
}
