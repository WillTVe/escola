<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->enum('nivel_ensino', [
                'Fundamental', 
                'Medio', 
                'Superior',
                'Pos-Graduacao'
            ]);
            $table->unsignedBigInteger('id_modalidade');
            $table->unsignedBigInteger('id_tipo_regime');
            $table->foreign('id_modalidade')->references('id')->on('modalidade_ensino');
            $table->foreign('id_tipo_regime')->references('id')->on('tipo_regime');
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
        Schema::dropIfExists('curso');
    }
}
