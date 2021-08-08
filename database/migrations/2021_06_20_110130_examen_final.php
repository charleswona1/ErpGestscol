<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ExamenFinal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examen_final', function (Blueprint $table) {
            $table->unsignedBigInteger('id_examen');
            $table->unsignedBigInteger('id_apprenant_classe');
            $table->string('serie', 50);
            $table->boolean('est_present')->nullable();
            $table->boolean('est_admis')->nullable();
            $table->string('mention', 50)->nullable();

            $table->foreign('id_examen')->references('id_examen')->on('examen');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examen_final');
    }
}
