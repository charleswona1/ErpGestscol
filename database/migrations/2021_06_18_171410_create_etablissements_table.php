<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtablissementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etablissement', function (Blueprint $table) {
            $table->bigIncrements('id_etablissement');
            $table->string('nom', 255);
            $table->string('abreviation', 100);
            $table->string('type_etablissement', 255);
            $table->string('type_apprenant', 255);
            $table->string('ville', 255);
            $table->string('boite_postale', 100);
            $table->string('email', 100);
            $table->string('telephone', 15);
            $table->string('fax', 15);
            $table->string('site_web', 255)->nullable();
            $table->text('localisation');
            $table->binary('logo');
            $table->dateTime('creation_date');
            $table->dateTime('last_update')->nullable();
            $table->string('nom_periode', 100);
            $table->string('adj_masculin_periode', 100);
            $table->string('adj_feminin_periode', 100);
            $table->string('nom_sous_periode', 100);
            $table->string('adj_masculin_sous_periode', 100);
            $table->string('adj_feminin_sous_periode', 100);
            $table->string('nom_annee', 100)->nullable();
            $table->string('adj_masculin_annee', 100)->nullable();
            $table->string('adj_feminin_annee', 100)->nullable();
            $table->string('resp1', 100)->nullable();
            $table->string('resp2', 100)->nullable();
            $table->string('resp3', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etablissement');
    }
}
