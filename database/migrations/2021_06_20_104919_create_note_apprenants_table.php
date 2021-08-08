<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoteApprenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('note_apprenant', function (Blueprint $table) {
            $table->unsignedBigInteger('id_evaluation_periode');
            $table->unsignedBigInteger('id_apprenant_classe');
            $table->double('note');

            $table->foreign('id_evaluation_periode')->references('id_evaluation_periode')->on('evaluation_periode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('note_apprenant');
    }
}
