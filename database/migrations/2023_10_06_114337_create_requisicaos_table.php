<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('requisicoes', function (Blueprint $table) {
            $table->id('id_requisicao');

            // id inteiro vazio
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_feedback')->nullable(true);

            $table->dateTime('date_time')->nullable(false);
            // id_usuario referencia id_usuario da tabela usuarios
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');

            $table->foreign('id_feedback')->references('id_feedback')->on('feedbacks');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requisicaos');
    }
};
