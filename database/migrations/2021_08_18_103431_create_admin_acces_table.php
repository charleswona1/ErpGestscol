<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminAccesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_acces', function (Blueprint $table) {
            $table->unsignedBigInteger('id_droit');
            $table->unsignedBigInteger('id_admin');

            $table->foreign('id_droit')->references('id_droit')->on('droit_admin');
            $table->foreign('id_admin')->references('id_admin')->on('admin');

            $table->primary(array('id_droit', 'id_admin'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_acces');
    }
}
