<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pessoa');
            $table->string('curriculo_lattes');
            $table->foreign('id_pessoa')->references('id')->on('pessoa');
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
        Schema::dropIfExists('professor');
    }
}
