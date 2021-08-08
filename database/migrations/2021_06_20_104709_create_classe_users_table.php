<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasseUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classe_user', function (Blueprint $table) {
            $table->bigInteger('id_user')->unsigned();
            $table->unsignedBigInteger('id_classe_annee');

            $table->foreign('id_user')->references('id_user')->on('users');
            $table->foreign('id_classe_annee')->references('id_classe_annee')->on('classe_annee');

            $table->primary(['id_user', 'id_classe_annee']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classe_user');
    }
}
