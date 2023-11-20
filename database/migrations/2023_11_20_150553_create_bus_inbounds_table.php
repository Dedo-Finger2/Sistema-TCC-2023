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
        Schema::create('bus_inbounds', function (Blueprint $table) {
            /*
            | ------------------------
            | Tabela de Voltas dos ônibus (Origem)
            | ------------------------
            | nesta tabela vamos estar armazenando as origens dos ônibus (Voltas).
            */
            $table->id();
            $table->time('horario')->nullable(false);
            $table->foreignId('address_id')->constrained('addresses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bus_inbounds');
    }
};
