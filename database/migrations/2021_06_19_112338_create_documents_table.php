<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document', function (Blueprint $table) {
            $table->bigIncrements('id_document');
            $table->unsignedBigInteger('id_etablissement');
            $table->string('intitule', 255)->nullable();
            $table->string('ligne1', 255)->nullable();
            $table->string('ligne2', 255)->nullable();
            $table->string('ligne3', 255)->nullable();
            $table->string('ligne4', 255)->nullable();
            $table->string('ligne5', 255)->nullable();
            $table->string('ligne6', 255)->nullable();
            $table->boolean('possede_entete')->nullable();
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
        Schema::dropIfExists('document');
    }
}
