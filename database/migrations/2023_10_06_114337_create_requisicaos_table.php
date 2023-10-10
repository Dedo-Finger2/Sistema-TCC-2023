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
            /*
            | ------------------------
            | Tabela de requisições
            | ------------------------
            | nesta tabela vamos estar guardando dados sobre os requisições que os usuários fizerem.
            */
            $table->id('id_requisicao'); // ID

            // id inteiro vazio
            $table->unsignedBigInteger('id_usuario')->nullable(false); // Chave estrangeira (não referenciada)
            $table->unsignedBigInteger('id_feedback')->nullable(true); // Chave estrangeira (não referenciada)

            $table->dateTime('data_hora')->nullable(false); // Data e hora em que a requisição foi feita

            // id_usuario referencia id_usuario da tabela usuarios
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');     // Referenciando a chave estrangeira
            $table->foreign('id_feedback')->references('id_feedback')->on('feedbacks'); // Referenciando a chave estrangeira

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
