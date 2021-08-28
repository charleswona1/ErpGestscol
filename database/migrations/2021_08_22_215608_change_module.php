<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeModule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('module_etablissement', function (Blueprint $table) {
            $table->dropForeign(['id_module']);
            $table->dropForeign(['id_etablissement']);

            $table->foreign('id_module')->references('id_module')->on('module')->onDelete('cascade');
            $table->foreign('id_etablissement')->references('id_etablissement')->on('etablissement')->onDelete('cascade');
            $table->foreign('id_licence')->references('id_licence')->on('licence')->onDelete('cascade');
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign(['id_module']);
    }
}
