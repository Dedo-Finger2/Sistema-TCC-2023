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
        Schema::create('idas_onibus', function (Blueprint $table) {
            /*
            | ------------------------
            | Tabela de Idas dos ônibus (Destino)
            | ------------------------
            | nesta tabela vamos estar armazenando os destinos dos ônibus (Idas).
            */
            $table->id('id_ida_onibus'); // ID
            $table->time('horario')->nullable(false); // Horário de saída

            $table->unsignedBigInteger('id_endereco')->nullable(false); // Chave estrangeira (não referenciada)

            $table->foreign('id_endereco')->references('id_endereco')->on('enderecos'); // Referenciando chave estrangeira
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ida_onibuses');
    }
};
