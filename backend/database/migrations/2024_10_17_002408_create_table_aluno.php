<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAluno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pessoa');
            $table->string('matricula');
            $table->date('data_nasc')->nullable();
            $table->foreign('id_pessoa')->references('id')->on('pessoa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aluno', function (Blueprint $table) {
            $table->dropIfExists('aluno');
        });
    }
}
