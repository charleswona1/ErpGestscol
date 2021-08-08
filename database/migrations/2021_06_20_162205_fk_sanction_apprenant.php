<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FkSanctionApprenant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sanction_apprenant', function (Blueprint $table) {
            
            $table->foreign('id_apprenant_classe')->references('id_apprenant_classe')->on('apprenant_classe');

            $table->primary(['id_sanction_periode', 'id_apprenant_classe'], 'id_sanction_apprenant');
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
