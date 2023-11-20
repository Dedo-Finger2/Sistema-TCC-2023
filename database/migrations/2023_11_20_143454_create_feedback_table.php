<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        /*
        | ------------------------
        | Tabela de Feedbacks
        | ------------------------
        | nesta tabela vamos guardar os feedbacks que os usuários darem para as requisições que fizeram no nosso sistema.
        */
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users'); // Chanve Estrangeira Usuário
            $table->string('comentario', 255)->nullable(true); // comentário do usuário
            $table->date('data')->nullable(false);                    // data do feedback
            $table->boolean('feedback')->nullable(false);            // indicação do feedback: positivo = TRUE, negativo = FALSE
            $table->timestamps();
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
