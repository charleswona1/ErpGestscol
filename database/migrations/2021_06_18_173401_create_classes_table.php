<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classe', function (Blueprint $table) {
            $table->bigIncrements('id_classe');
            $table->unsignedBigInteger('id_niveau');
            $table->string('nom', 50);

            $table->foreign('id_niveau')->references('id_niveau')->on('niveau_scolaire');
            $table->unique(['id_classe', 'id_niveau']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classe');
    }
}
