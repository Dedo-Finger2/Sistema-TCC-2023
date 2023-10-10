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
        Schema::create('usuarios', function (Blueprint $table) {
            /*
            | ------------------------
            | Tabela de Usuarios
            | ------------------------
            | nesta tabela vão estar os dados dos usuários que se cadastrarem no nosso sistema.
            */
            $table->id('id_usuario');   // ID

            $table->unsignedBigInteger('id_endereco');  // Chave estrangeira (não referenciada)

            $table->string('nome', 100)->nullable(false);   // Nome do usuário
            $table->string('email', 255)->nullable(false);  // Email do usuário
            $table->string('senha', 8)->nullable(false);    // Senha do usuário

            $table->foreign('id_endereco')->references('id_endereco')->on('enderecos'); // Referenciando a chave estrangeira
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
