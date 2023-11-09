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
        Schema::create('origens_usuarios', function (Blueprint $table) {
            /*
            | ------------------------
            | Tabela (associativa) de Origens dos usuarios
            | ------------------------
            | nesta tabela vamos armazenar a origem do usuário ao fazer uma requisição
            */
            $table->id('id_origem_usuario');
            $table->unsignedBigInteger('id_local_requisitado')->nullable(false);       // Chave estrangeira (não referenciada)
            $table->unsignedBigInteger('id_requisicao')->nullable(false); // Chave estrangeira (não referenciada)
            $table->unsignedBigInteger('id_usuario')->nullable(false);   // Chave estrangeira (não referenciada)
            $table->unsignedBigInteger('id_endereco')->nullable(true);  // Chave estrangeira (não referenciada)

            $table->string('nome', 150)->nullable(false); // Nome da origem (endereço escolhido/escrito pelo usuário)

            $table->foreign('id_local_requisitado')->references('id_local_requisitado')->on('locais_requisitados');    // Referenciando chave estrangeira
            $table->foreign('id_requisicao')->references('id_requisicao')->on('requisicoes'); // Referenciando chave estrangeira
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');         // Referenciando chave estrangeira
            $table->foreign('id_endereco')->references('id_endereco')->on('enderecos');     // Referenciando chave estrangeira
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('origem_usuarios');
    }
};
