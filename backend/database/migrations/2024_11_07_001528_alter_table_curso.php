<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableCurso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('curso', function (Blueprint $table) {
            $table->unsignedBigInteger('id_modalidade');
            $table->unsignedBigInteger('id_tipo_regime');
            $table->foreign('id_modalidade')->references('id')->on('modalidade_ensino');
            $table->foreign('id_tipo_regime')->references('id')->on('tipo_regime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('curso', function (Blueprint $table) {
            //
        });
    }
}
