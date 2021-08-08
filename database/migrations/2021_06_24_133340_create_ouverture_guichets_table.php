<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOuvertureGuichetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ouverture_guichet', function (Blueprint $table) {
            $table->unsignedBigInteger('id_guichet');
            $table->unsignedBigInteger('id_journee');
            $table->date('date_ouverture');
            $table->time('heure_ouverture');
            $table->dateTime('date_fermeture')->nullable();
            $table->double('solde')->nullable();

            $table->foreign('id_guichet')->references('id_guichet')->on('guichet');
            $table->foreign('id_journee')->references('id_journee')->on('journee_comptable');

            $table->primary(['id_guichet', 'id_journee'], 'id_ouverture_guichet');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ouverture_guichet');
    }
}
