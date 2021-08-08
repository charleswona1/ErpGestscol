<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoupurePayesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupure_paye', function (Blueprint $table) {
            $table->bigIncrements('id_coupure');
            $table->unsignedBigInteger('id_paye');
            $table->integer('coupure_1');
            $table->integer('coupure_2');
            $table->integer('coupure_3');
            $table->integer('coupure_4');
            $table->integer('coupure_5');
            $table->integer('coupure_6');
            $table->integer('coupure_7');
            $table->integer('coupure_8');
            $table->integer('coupure_9');
            $table->integer('coupure_10');

            $table->foreign('id_paye')->references('id_paye')->on('paye');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupure_paye');
    }
}
