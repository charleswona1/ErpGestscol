<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSynthesesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('synthese', function (Blueprint $table) {
            $table->unsignedBigInteger('id_synthese_classe');
            $table->unsignedBigInteger('id_apprenant_classe');
            $table->double('som_point')->nullable();
            $table->integer('som_coef')->nullable();
            $table->double('moyenne_generale')->nullable();
            $table->integer('rang')->nullable();
            $table->string('appreciation', 255)->nullable();
            $table->string('mention', 255)->nullable();

            $table->foreign('id_synthese_classe')->references('id_synthese_classe')->on('synthese_classe');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('synthese');
    }
}
