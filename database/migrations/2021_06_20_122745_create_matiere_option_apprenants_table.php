<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatiereOptionApprenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matiere_option_apprenant', function (Blueprint $table) {
            $table->unsignedBigInteger('id_matiere_classe');
            $table->unsignedBigInteger('id_apprenant_classe');

            $table->foreign('id_matiere_classe')->references('id_matiere_classe')->on('matiere_classe');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matiere_option_apprenant');
    }
}
