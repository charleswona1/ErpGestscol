<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupeApprenantClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupe_apprenant_classe', function (Blueprint $table) {
            $table->unsignedBigInteger('id_groupe');
            $table->unsignedBigInteger('id_apprenant_classe');

            $table->foreign('id_groupe')->references('id_groupe')->on('groupe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groupe_apprenant_classe');
    }
}
