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
        Schema::create('origem_usuarios', function (Blueprint $table) {
            $table->unsignedBigInteger('id_local');
            $table->unsignedBigInteger('id_requisicao');
            $table->unsignedBigInteger('id_usuario');
            $table->string('nome', 100)->nullable(false);
            $table->unsignedBigInteger('id_endereco')->nullable(true);

            $table->foreign('id_local')->references('id_local')->on('locais');
            $table->foreign('id_requisicao')->references('id_requisicao')->on('requisicoes');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
            $table->foreign('id_endereco')->references('id_endereco')->on('enderecos');
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
