<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRubriqueProfilPayesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubrique_profil_paye', function (Blueprint $table) {
            $table->unsignedBigInteger('id_rubrique');
            $table->unsignedBigInteger('id_profil_paye');
            $table->string('type_evaluation', 100)->nullable();
            $table->string('taux_calcul', 100)->nullable();
            $table->string('assiette_calcul', 100)->nullable();
            $table->string('valeur', 255)->nullable();

            $table->foreign('id_profil_paye')->references('id_profil_paye')->on('profil_paye');
            $table->foreign('id_rubrique')->references('id_rubrique')->on('rubrique');
            $table->primary(['id_rubrique', 'id_profil_paye']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rubrique_profil_paye');
    }
}
