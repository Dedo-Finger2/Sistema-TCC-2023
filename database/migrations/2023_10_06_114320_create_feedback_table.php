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
        Schema::create('feedbacks', function (Blueprint $table) {
            /*
            | ------------------------
            | Tablea de Feedbacks
            | ------------------------
            | nesta tabela vamos guardar os feedbacks que os usuários darem para as requisições que fizeram no nosso sistema.
            */
            $table->id('id_feedback'); // ID

            // id inteiro vazio
            $table->unsignedBigInteger('id_usuario'); // Chave estrangeira (não referenciada)

            $table->string('comentario', 255)->nullable(true); // comentário do usuário
            $table->date('data')->nullable(false);                    // data do feedback
            $table->boolean('feedback')->nullable(false);            // indicação do feedback: positivo = TRUE, negativo = FALSE

            // id_usuario referencia id_usuario da tabela usuarios
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios'); // Referenciando a chave estrangeira
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
