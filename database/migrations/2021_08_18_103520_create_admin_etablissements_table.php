<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminEtablissementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_etablissement', function (Blueprint $table) {
            $table->unsignedBigInteger('id_etablissement');
            $table->unsignedBigInteger('id_admin');

            $table->foreign('id_etablissement')->references('id_etablissement')->on('etablissement');
            $table->foreign('id_admin')->references('id_admin')->on('admin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_etablissement');
    }
}
