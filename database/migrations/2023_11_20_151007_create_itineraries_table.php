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
        | Tabela de Itinerários
        | ------------------------
        | nesta tabela vamos estar armazenando informações sobre os itinerários.
        */
        Schema::create('itineraries', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 50)->unique()->nullable(false);
            $table->foreignId('bus_id')->constrained('buses');
            $table->foreignId('route_id')->constrained('routes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itineraries');
    }
};
