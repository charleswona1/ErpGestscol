<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecetteGroupeComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recette_groupe_compte', function (Blueprint $table) {
            $table->unsignedBigInteger('id_groupe_compte');
            $table->unsignedBigInteger('id_recette');
            $table->integer('ordre');
            $table->date('echeance')->nullable();

            $table->foreign('id_groupe_compte')->references('id_groupe_compte')->on('groupe_compte');
            $table->foreign('id_recette')->references('id_recette')->on('recette');

            $table->primary(['id_groupe_compte', 'id_recette'], 'id_recette_groupe_compte');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recette_groupe_compte');
    }
}
