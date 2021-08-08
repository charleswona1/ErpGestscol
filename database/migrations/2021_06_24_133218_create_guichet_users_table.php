<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuichetUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guichet_user', function (Blueprint $table) {
            $table->unsignedBigInteger('id_guichet');
            $table->unsignedBigInteger('id_user');

            $table->foreign('id_guichet')->references('id_guichet')->on('guichet');
            $table->foreign('id_user')->references('id_user')->on('users');

            $table->primary(['id_guichet', 'id_user'], 'id_guichet_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guichet_user');
    }
}
