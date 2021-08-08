<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compte', function (Blueprint $table) {
            $table->bigIncrements('id_compte');
            $table->unsignedBigInteger('id_etablissement');
            $table->unsignedBigInteger('id_apprenant')->nullable();
            $table->string('intitule', 255)->unique();
            $table->string('numero', 50)->unique();
            $table->dateTime('date_creation');

            $table->foreign('id_etablissement')->references('id_etablissement')->on('etablissement');
            $table->foreign('id_apprenant')->references('id_apprenant')->on('apprenant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compte');
    }
}
