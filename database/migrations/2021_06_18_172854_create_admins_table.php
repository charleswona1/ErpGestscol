<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->bigIncrements('id_admin');
            $table->string('login', 100)->unique();
            $table->string('email', 50)->nullable();
            $table->string('password', 255);
            $table->string('nom', 100);
            $table->string('telephone', 15);
            $table->boolean('enabled');
            $table->dateTime('creation_date');
            $table->dateTime('last_update')->nullable();
            $table->dateTime('last_login')->nullable();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
