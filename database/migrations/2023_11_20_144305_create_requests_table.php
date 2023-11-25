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
        | Tabela de requisições
        | ------------------------
        | nesta tabela vamos estar guardando dados sobre os requisições que os usuários fizerem.
        */
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('feedback_id')->nullable(true)->constrained('feedback');
            $table->dateTime('data_hora')->nullable(false);
            $table->boolean('retorno_requisicao')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
