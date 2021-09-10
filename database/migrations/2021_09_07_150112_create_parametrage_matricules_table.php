<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParametrageMatriculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametrage_matricule', function (Blueprint $table) {
            $table->bigIncrements('id_parametrage');
            $table->unsignedBigInteger('id_etablissement');
            $table->string('prefix_mat', 255)->nullable();
            $table->string('prefix2_mat', 255)->nullable();
            $table->string('suffix_mat', 255)->nullable();
            $table->string('pos_mat', 255)->nullable();
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
        Schema::dropIfExists('parametrage_matricule');
    }
}
