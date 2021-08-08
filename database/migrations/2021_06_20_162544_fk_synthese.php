<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FkSynthese extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('synthese', function (Blueprint $table) {
            
            $table->foreign('id_apprenant_classe')->references('id_apprenant_classe')->on('apprenant_classe');

            $table->primary(['id_synthese_classe', 'id_apprenant_classe'], 'id_examen_final');
        });

        Schema::table('ligne_synthese', function (Blueprint $table) {
            
            $table->foreign('id_apprenant_classe')->references('id_apprenant_classe')->on('apprenant_classe');

            $table->primary(['id_synthese_classe', 'id_apprenant_classe', 'id_matiere_classe'], 'id_ligne_synthese');
        });

        Schema::table('ligne_groupe', function (Blueprint $table) {
            
            $table->foreign('id_apprenant_classe')->references('id_apprenant_classe')->on('apprenant_classe');

            $table->primary(['id_synthese_classe', 'id_apprenant_classe', 'id_groupe_matiere'], 'id_ligne_groupe');
        });

        Schema::table('moyenne_scolaire_apprenant', function (Blueprint $table) {
            
            $table->foreign('id_apprenant_classe')->references('id_apprenant_classe')->on('apprenant_classe');

            $table->primary(['id_synthese_classe', 'id_apprenant_classe', 'id_moyenne_scolaire'], 'id_moyenne_scolaire_apprenant');
        });

        Schema::table('synthese_discipline', function (Blueprint $table) {
            
            $table->foreign('id_apprenant_classe')->references('id_apprenant_classe')->on('apprenant_classe');

            $table->primary(['id_synthese_classe', 'id_apprenant_classe', 'id_sanction'], 'id_synthese_discipline');
        });

        Schema::table('matiere_option_apprenant', function (Blueprint $table) {
            
            $table->foreign('id_apprenant_classe')->references('id_apprenant_classe')->on('apprenant_classe');

            $table->primary(['id_matiere_classe', 'id_apprenant_classe'], 'id_matiere_option_apprenant');
        });

        Schema::table('admin', function (Blueprint $table) {
            $table->text('two_factor_secret')
                    ->after('password')
                    ->nullable();

            $table->text('two_factor_recovery_codes')
                    ->after('two_factor_secret')
                    ->nullable();
        });

        Schema::table('admin', function (Blueprint $table) {
            $table->dropColumn('two_factor_secret', 'two_factor_recovery_codes');
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
