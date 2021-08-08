<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprenant', function (Blueprint $table) {
            $table->bigIncrements('id_apprenant');
            $table->unsignedBigInteger('id_etablissement');
            $table->string('nom', 255);
            $table->string('matricule', 20)->nullable();
            $table->char('sexe');
            $table->date('date_naissance');
            $table->string('lieu_naissance', 255);
            $table->string('email', 50)->nullable();
            $table->string('telephone', 15)->nullable();
            $table->string('groupe_sanguin', 5)->nullable();
            $table->string('rhesus', 5)->nullable();
            $table->string('religion', 255)->nullable();
            $table->string('domicile', 255);
            $table->integer('type_contact');
            $table->integer('index_contact');
            $table->text('autres')->nullable();
            $table->string('nom_pere', 255)->nullable();
            $table->string('nom_mere', 255);
            $table->string('nom_tuteur', 255)->nullable();
            $table->string('profession_pere', 255)->nullable();
            $table->string('profession_mere', 255);
            $table->string('profession_tuteur', 255)->nullable();
            $table->string('tel_pere', 15)->nullable();
            $table->string('tel_mere', 15);
            $table->string('tel_tuteur', 15)->nullable();
            $table->string('email_pere', 100)->nullable();
            $table->string('email_mere', 100)->nullable();
            $table->string('email_tuteur', 100)->nullable();

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
        Schema::dropIfExists('apprenant');
    }
}
