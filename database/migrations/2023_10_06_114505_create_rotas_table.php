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
        Schema::create('rotas', function (Blueprint $table) {
            /*
            | ------------------------
            | Tabela de Rotas
            | ------------------------
            | nesta tabela vamos estar armazenando as rotas feitas pelos ônibus.
            */
            $table->id('id_rota'); // ID

            $table->unsignedBigInteger('id_ida_onibus')->nullable(true); // Chave estrangeira (não referenciada)
            $table->unsignedBigInteger('id_volta_onibus')->nullable(false); // Chave estrangeira (não referenciada)

            $table->foreign('id_ida_onibus')->references('id_ida_onibus')->on('idas_onibus');      // Referenciando chave estrangeira
            $table->foreign('id_volta_onibus')->references('id_volta_onibus')->on('voltas_onibus'); // Referenciando chave estrangeira
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rotas');
    }
};
