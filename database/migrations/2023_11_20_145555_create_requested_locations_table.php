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
        | Tabela de locais Requisitados
        | ------------------------
        | nesta tabela vamos armazenar os locaisque os usuários requisitam enquanto usam nossa plataforma
        */
        Schema::create('requested_locations', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 150)->nullable(false);
            $table->foreignId('address_id')->constrained('addresses')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requested_locations');
    }
};
