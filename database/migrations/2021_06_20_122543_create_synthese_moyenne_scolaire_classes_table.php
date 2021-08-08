<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSyntheseMoyenneScolaireClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('synthese_moyenne_scolaire_classe', function (Blueprint $table) {
            $table->unsignedBigInteger('id_synthese_classe');
            $table->unsignedBigInteger('id_moyenne_scolaire');
            $table->string('libelle', 255)->nullable();
            $table->double('moy_classe')->nullable();
            $table->double('moy_min')->nullable();
            $table->double('moy_max')->nullable();

            $table->foreign('id_synthese_classe')->references('id_synthese_classe')->on('synthese_classe');
            $table->foreign('id_moyenne_scolaire')->references('id_moyenne_scolaire')->on('moyenne_scolaire');

            $table->primary(['id_synthese_classe', 'id_moyenne_scolaire'], 'id_synthese_moyenne_scolaire_classe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('synthese_moyenne_scolaire_classe');
    }
}
