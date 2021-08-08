<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoratoiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moratoire', function (Blueprint $table) {
            $table->bigIncrements('id_moratoire');
            $table->unsignedBigInteger('id_compte');
            $table->unsignedBigInteger('id_recette');
            $table->string('intitule', 255);
            $table->string('groupe', 255);
            $table->string('recette', 255);
            $table->date('date_creation');
            $table->date('date_expiration');
            
            $table->foreign('id_compte')->references('id_compte')->on('compte');
            $table->foreign('id_recette')->references('id_recette')->on('recette');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moratoire');
    }
}
