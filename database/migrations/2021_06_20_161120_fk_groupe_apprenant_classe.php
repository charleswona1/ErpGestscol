<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FkGroupeApprenantClasse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('groupe_apprenant_classe', function (Blueprint $table) {
            
            
            $table->foreign('id_apprenant_classe')->references('id_apprenant_classe')->on('apprenant_classe');

            $table->primary(['id_groupe', 'id_apprenant_classe']);
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
