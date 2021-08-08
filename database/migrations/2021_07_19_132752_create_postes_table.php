<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poste', function (Blueprint $table) {
            $table->bigIncrements('id_poste');
            $table->unsignedBigInteger('id_service')->nullable();
            $table->unsignedBigInteger('id_direction')->nullable();
            $table->string('libelle', 100);

            $table->foreign('id_service')->references('id_service')->on('service');
            $table->foreign('id_direction')->references('id_direction')->on('direction');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('poste');
    }
}
