<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licence', function (Blueprint $table) {
            $table->bigIncrements('id_licence');
            $table->text('numero');
            $table->date('creation_date');
            $table->date('expiration_date');
            $table->boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('licence');
    }
}
