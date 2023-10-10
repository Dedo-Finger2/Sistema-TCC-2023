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
        Schema::create('voltas_onibus', function (Blueprint $table) {
            /*
            | ------------------------
            | Tabela de Voltas dos ônibus (Origem)
            | ------------------------
            | nesta tabela vamos estar armazenando as origens dos ônibus (Voltas).
            */
            $table->id('id_volta_onibus'); // ID
            $table->time('horario', 5)->nullable(false); // Horário da volta

            $table->unsignedBigInteger('id_endereco')->nullable(false); // Chave estrangeira (não referenciada)

            $table->foreign('id_endereco')->references('id_endereco')->on('enderecos'); // Referenciando chave estrangeira
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volta_onibuses');
    }
};
