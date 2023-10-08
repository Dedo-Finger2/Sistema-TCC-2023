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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('id_endereco'); // ! 1

            $table->string('nome', 100)->nullable(false);
            $table->string('email', 255)->nullable(false);
            $table->string('senha', 8)->nullable(false);

            // Nome da chave estrangeira - Nome da chave primária da tabela - Nome da tabela
            $table->foreign('id_endereco')->references('id_endereco')->on('enderecos');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
