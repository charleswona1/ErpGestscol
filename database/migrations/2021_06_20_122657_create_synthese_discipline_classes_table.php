<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSyntheseDisciplineClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('synthese_discipline_classe', function (Blueprint $table) {
            $table->unsignedBigInteger('id_synthese_classe');
            $table->unsignedBigInteger('id_sanction');
            $table->string('libelle', 255)->nullable();
            $table->string('unite', 10)->nullable();
            $table->integer('seuil')->nullable();
            $table->integer('degre')->nullable();
            $table->integer('total')->nullable();
            $table->integer('total_direct')->nullable();

            $table->foreign('id_synthese_classe')->references('id_synthese_classe')->on('synthese_classe');
            $table->foreign('id_sanction')->references('id_sanction')->on('sanction');

            $table->primary(['id_synthese_classe', 'id_sanction'], 'id_synthese_discipline_classe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('synthese_discipline_classe');
    }
}
