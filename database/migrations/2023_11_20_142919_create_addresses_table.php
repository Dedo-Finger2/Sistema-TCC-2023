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
        | Tabela de Endereços
        | ------------------------
        | nesta tabela vamos estar guardando dados sobre os endereços que temos.
        */
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('logradouro', 255)->nullable(false); // Logradouro do endereço
            $table->string('bairro', 100)->nullable(false);     // Bairro do endereço
            $table->string('cidade', 75)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
