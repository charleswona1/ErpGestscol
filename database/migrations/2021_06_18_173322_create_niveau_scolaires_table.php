<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNiveauScolairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('niveau_scolaire', function (Blueprint $table) {
            $table->bigIncrements('id_niveau');
            $table->unsignedBigInteger('id_cycle');
            $table->string('nom', 50);
            $table->integer('bareme');
            $table->integer('ordre');

            $table->foreign('id_cycle')->references('id_cycle')->on('cycle');
            $table->unique(['id_cycle', 'nom']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('niveau_scolaire');
    }
}
