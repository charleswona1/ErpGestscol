<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examen', function (Blueprint $table) {
            $table->bigIncrements('id_examen');
            $table->unsignedBigInteger('id_etablissement');
            $table->string('nom', 100);

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
        Schema::dropIfExists('examen');
    }
}
