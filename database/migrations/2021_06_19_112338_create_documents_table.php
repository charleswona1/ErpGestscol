<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document', function (Blueprint $table) {
            $table->bigIncrements('id_document');
            $table->unsignedBigInteger('id_etablissement');
            $table->string('ligne1_eng', 255)->nullable();
            $table->string('ligne2_eng', 255)->nullable();
            $table->string('ligne3_eng', 255)->nullable();
            $table->string('ligne1_end', 255)->nullable();
            $table->string('ligne2_end', 255)->nullable();
            $table->string('ligne3_end', 255)->nullable();
            $table->string('ligne1_certsco', 255)->nullable();
            $table->string('ligne2_certsco', 255)->nullable();
            $table->string('ligne3_certsco', 255)->nullable();
            $table->string('ligne4_certsco', 255)->nullable();
            $table->string('ligne1_certrad', 255)->nullable();
            $table->string('ligne2_certrad', 255)->nullable();
            $table->string('ligne3_certrad', 255)->nullable();
            $table->string('ligne4_certrad', 255)->nullable();
            $table->string('ligne1_diplome', 255)->nullable();
            $table->string('ligne2_diplome', 255)->nullable();
            $table->string('ligne3_diplome', 255)->nullable();
            $table->string('ligne4_diplome', 255)->nullable();
            $table->string('sign_bulg', 255)->nullable();
            $table->string('sign_bulm', 255)->nullable();
            $table->string('sign_buld', 255)->nullable();
            $table->string('sign_app', 255)->nullable();
            $table->string('nom_principal', 255)->nullable();
            $table->string('prefix_mat', 255)->nullable();
            $table->string('suffix_mat', 255)->nullable();
            $table->string('pos_mat', 255)->nullable();
            

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
        Schema::dropIfExists('document');
    }
}
