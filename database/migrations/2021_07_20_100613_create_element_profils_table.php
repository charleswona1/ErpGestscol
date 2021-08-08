<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElementProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('element_profil', function (Blueprint $table) {
            $table->unsignedBigInteger('id_element');
            $table->unsignedBigInteger('id_profil_paye');

            $table->foreign('id_element')->references('id_element')->on('element_paye');
            $table->foreign('id_profil_paye')->references('id_profil_paye')->on('profil_paye');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('element_profil');
    }
}
