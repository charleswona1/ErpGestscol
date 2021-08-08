<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanctionApprenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanction_apprenant', function (Blueprint $table) {
            $table->unsignedBigInteger('id_sanction_periode');
            $table->unsignedBigInteger('id_apprenant_classe');
            $table->integer('valeur');
            $table->string('motif', 150);

            $table->foreign('id_sanction_periode')->references('id_sanction_periode')->on('sanction_periode');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanction_apprenant');
    }
}
