<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turma', function (Blueprint $table) {
            $table->id();
            $table->integer('capacidade')->nullable();
            $table->string('descricao');
            $table->unsignedBigInteger('id_escola');
            $table->unsignedBigInteger('id_estrutura_curricular');
            $table->foreign('id_escola')->references('id')->on('escola');
            $table->foreign('id_estrutura_curricular')
                ->references('id')
                ->on('estrutura_curricular');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turmas');
    }
}
