<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleEtablissementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_etablissement', function (Blueprint $table) {
            $table->unsignedBigInteger('id_module');
            $table->unsignedBigInteger('id_etablissement');
            $table->unsignedBigInteger('id_licence');
            $table->date('date_expiration');
            $table->text('numero_licence');

            $table->foreign('id_module')->references('id_module')->on('module');
            $table->foreign('id_etablissement')->references('id_etablissement')->on('etablissement');

            $table->primary(array('id_module', 'id_etablissement'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('module_etablissement');
    }
}
