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
        Schema::create('onibus', function (Blueprint $table) {
            /*
            | ------------------------
            | Tabela de Onibus
            | ------------------------
            | nesta tabela vamos estar armazenando informações de alguns ônibus
            */
            $table->id('id_onibus'); // ID
            $table->string('numeracao',5)->nullable(false); // Numeração do ônibus

            $table->unsignedBigInteger('id_empresa')->nullable(false); // Chave estrangeira (não referenciada)

            $table->foreign('id_empresa')->references('id_empresa')->on('empresas'); // Referenciando chave estrangeira
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('onibuses');
    }
};
