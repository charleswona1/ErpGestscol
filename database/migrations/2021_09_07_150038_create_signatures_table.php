<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signature', function (Blueprint $table) {
            $table->bigIncrements('id_signature');
            $table->unsignedBigInteger('id_etablissement');
            $table->string('sign_bulg', 255)->nullable();
            $table->string('sign_bulm', 255)->nullable();
            $table->string('sign_buld', 255)->nullable();
            $table->string('sign_app', 255)->nullable();
            $table->string('nom_principal', 255)->nullable();
            $table->foreign('id_etablissement')->references('id_etablissement')->on('etablissement');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('signature');
    }
}
