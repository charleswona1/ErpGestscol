<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeRequiredEtablissement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('etablissement', function (Blueprint $table) {
            $table->string('nom_periode', 100)->nullable()->change();
            $table->string('adj_masculin_periode', 100)->nullable()->change();
            $table->string('adj_feminin_periode', 100)->nullable()->change();
            $table->string('nom_sous_periode', 100)->nullable()->change();
            $table->string('adj_masculin_sous_periode', 100)->nullable()->change();
            $table->string('adj_feminin_sous_periode', 100)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
