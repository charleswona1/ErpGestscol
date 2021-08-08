<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtablissementUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etablissement_user', function (Blueprint $table) {
            $table->bigIncrements('id_etablissement_user');
            $table->unsignedBigInteger('id_etablissement');
            $table->unsignedBigInteger('id_user');
            $table->boolean('is_default');
            $table->integer('is_default_annee');

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
        Schema::dropIfExists('etablissement_user');
    }
}
