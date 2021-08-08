<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_session', function (Blueprint $table) {
            $table->bigIncrements('id_session');
            $table->unsignedBigInteger('id_user');
            $table->dateTime('date_debut');
            $table->dateTime('date_fin');
            $table->unsignedBigInteger('id_annee_academique');
            $table->unsignedBigInteger('id_etablissement');
            
            $table->foreign('id_annee_academique')->references('id_annee_academique')->on('annee_academique');
            $table->foreign('id_etablissement')->references('id_etablissement')->on('etablissement');
            $table->foreign('id_user')->references('id_user')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_session');
    }
}
