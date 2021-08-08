<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salarie', function (Blueprint $table) {
            $table->bigIncrements('id_salarie');
            $table->unsignedBigInteger('id_poste');
            $table->unsignedBigInteger('id_categorie');
            $table->unsignedBigInteger('id_dipe');
            $table->unsignedBigInteger('id_profil_paye');
            $table->unsignedBigInteger('id_etablissement');
            $table->string('nom', 100);
            $table->string('prenom', 100);
            $table->date('date_naiss')->nullable();
            $table->string('sexe', 10);
            $table->string('lieu_naiss', 255)->nullable();
            $table->string('matricule', 20);
            $table->string('niveau_etude', 255)->nullable();
            $table->string('bp', 100)->nullable();
            $table->string('situation_familiale', 50)->nullable();
            $table->integer('enfant');
            $table->string('nationalite', 255);
            $table->string('piece_didentite', 20);
            $table->binary('photo')->nullable();
            $table->date('embauche');
            $table->date('depart')->nullable();
            $table->boolean('en_service');
            $table->integer('echelon')->nullable();
            $table->integer('indice')->nullable();
            $table->string('type_emploi', 255);
            $table->string('numero_compte', 255)->nullable();
            $table->string('code_journal', 10)->nullable();
            $table->string('CNPS', 255)->nullable();
            $table->string('classification_cnps', 20)->nullable();
            $table->string('nbre_part', 255)->nullable();
            $table->string('type_cnps', 255)->nullable();
            $table->string('nationalite_cnps', 255)->nullable();
            $table->string('situation_cnps', 255)->nullable();
            $table->string('type_personnel_cnps', 255)->nullable();
            $table->string('first_paie', 20)->nullable();
            $table->string('feuille_dipe', 20)->nullable();
            $table->string('banque', 255)->nullable();
            $table->string('agence', 255)->nullable();
            $table->string('mode_paiement', 255);
            $table->string('conjoint', 255)->nullable();
            $table->string('acte_mariage', 255)->nullable();
            $table->boolean('conjoint_compte')->nullable();

            $table->foreign('id_poste')->references('id_poste')->on('poste');
            $table->foreign('id_categorie')->references('id_categorie')->on('categorie_socio');
            $table->foreign('id_dipe')->references('id_dipe')->on('dipe');
            $table->foreign('id_profil_paye')->references('id_profil_paye')->on('profil_paye');
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
        Schema::dropIfExists('salarie');
    }
}
