<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRessourceProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ressource_profil', function (Blueprint $table) {
            $table->unsignedBigInteger('id_ressource');
            $table->unsignedBigInteger('id_profil');
            $table->boolean('lecture');
            $table->boolean('ecriture');
            $table->boolean('modification');
            $table->boolean('suppression');

            $table->foreign('id_ressource')->references('id_ressource')->on('ressource');
            $table->foreign('id_profil')->references('id_profil')->on('profil');

            $table->primary(array('id_ressource', 'id_profil'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ressource_profil');
    }
}
