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
        | Tabela de Rotas
        | ------------------------
        | nesta tabela vamos estar armazenando as rotas feitas pelos ônibus.
        */
        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bus_outbound_id')->constrained('bus_outbounds');
            $table->foreignId('bus_inbound_id')->constrained('bus_inbounds');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('routes');
    }
};
