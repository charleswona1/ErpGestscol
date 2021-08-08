<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FkExamenFinal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('examen_final', function (Blueprint $table) {
            
            $table->foreign('id_apprenant_classe')->references('id_apprenant_classe')->on('apprenant_classe');

            $table->primary(['id_examen', 'id_apprenant_classe'], 'id_synthese');
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
