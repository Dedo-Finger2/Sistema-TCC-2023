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

            $table->id('id_feedback');

            // id inteiro vazio
            $table->unsignedBigInteger('id_usuario');

            $table->string('comentario', 45)->nullable(false);
            $table->date('data')->nullable(false);
            $table->tinyInteger('feedback')->nullable(false);

            // id_usuario referencia id_usuario da tabela usuarios
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
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
