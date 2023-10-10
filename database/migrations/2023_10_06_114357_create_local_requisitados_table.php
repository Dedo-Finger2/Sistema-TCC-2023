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
        Schema::create('locais_requisitados', function (Blueprint $table) {
            /*
            | ------------------------
            | Tabela de locais Requisitados
            | ------------------------
            | nesta tabela vamos armazenar os locaisque os usuários requisitam enquanto usam nossa plataforma
            */
            $table->id('id_local'); // ID

            $table->string('nome', 150)->nullable(false); // Nome do local (endereço descrito pelo usuario)

            $table->unsignedBigInteger('id_endereco')->nullable(true); // Chave estrangeira (não referenciada)

            $table->foreign('id_endereco')->references('id_endereco')->on('enderecos'); // Referenciando chave estrangeria
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('local_requisitados');
    }
};
