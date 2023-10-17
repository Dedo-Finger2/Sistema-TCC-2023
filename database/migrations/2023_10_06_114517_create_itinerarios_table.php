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
        Schema::create('itinerarios', function (Blueprint $table) {
            /*
            | ------------------------
            | Tabela de Itinerários
            | ------------------------
            | nesta tabela vamos estar armazenando informações sobre os itinerários.
            */
            $table->id('id_itinerario'); // ID
            $table->string('codigo_itinerario',30); // Código de identificação do itinerário

            $table->unsignedBigInteger('id_onibus')->nullable(false); // Chave estrangeira (não referencaida)
            $table->unsignedBigInteger('id_rota')->nullable(false);  // Chave estrangeira (não referencaida)

            $table->foreign('id_onibus')->references('id_onibus')->on('onibus'); // Referenciando chave estrangeira
            $table->foreign('id_rota')->references('id_rota')->on('rotas'); // Referenciando chave estrangeira
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itinerarios');
    }
};
