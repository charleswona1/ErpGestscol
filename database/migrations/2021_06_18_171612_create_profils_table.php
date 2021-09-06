<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil', function (Blueprint $table) {
            $table->bigIncrements('id_profil');
            $table->string('libelle', 255);
            $table->text('description')->nullable();
            $table->unsignedBigInteger('id_etablissement');

            $table->foreign('id_etablissement')->references('id_etablissement')->on('etablissement');
            $table->unique(['libelle', 'id_etablissement']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profil');
    }
}
