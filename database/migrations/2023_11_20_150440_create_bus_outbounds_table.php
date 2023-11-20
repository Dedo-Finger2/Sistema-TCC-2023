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
        | Tabela de Idas dos ônibus (Destino)
        | ------------------------
        | nesta tabela vamos estar armazenando os destinos dos ônibus (Idas).
        */
        Schema::create('bus_outbounds', function (Blueprint $table) {
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
        Schema::dropIfExists('bus_outbounds');
    }
};
