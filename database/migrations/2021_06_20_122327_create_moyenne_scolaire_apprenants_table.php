<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoyenneScolaireApprenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moyenne_scolaire_apprenant', function (Blueprint $table) {
            $table->unsignedBigInteger('id_synthese_classe');
            $table->unsignedBigInteger('id_apprenant_classe');
            $table->unsignedBigInteger('id_moyenne_scolaire');
            $table->double('somme_point')->nullable();
            $table->integer('somme_coef')->nullable();
            $table->double('moy_scolaire')->nullable();
            $table->integer('rang')->nullable();
            $table->string('appreciation', 255)->nullable();
            $table->string('mention', 255)->nullable();

            $table->foreign('id_synthese_classe')->references('id_synthese_classe')->on('synthese_classe');
            
            $table->foreign('id_moyenne_scolaire')->references('id_moyenne_scolaire')->on('moyenne_scolaire');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moyenne_scolaire_apprenant');
    }
}
