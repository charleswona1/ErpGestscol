<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilPayesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil_paye', function (Blueprint $table) {
            $table->bigIncrements('id_profil_paye');
            $table->unsignedBigInteger('id_etablissement');
            $table->integer('numero');
            $table->string('nom', 255);

            $table->foreign('id_etablissement')->references('id_etablissement')->on('etablissement');
            $table->unique(['id_etablissement', 'nom']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profil_paye');
    }
}
