<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupeComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupe_compte', function (Blueprint $table) {
            $table->bigIncrements('id_groupe_compte');
            $table->unsignedBigInteger('id_etablissement');
            $table->unsignedBigInteger('id_classe');
            $table->string('libelle', 100)->unique();
            $table->integer('effectif')->default(0);

            $table->foreign('id_etablissement')->references('id_etablissement')->on('etablissement');
            $table->foreign('id_classe')->references('id_classe')->on('classe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groupe_compte');
    }
}
