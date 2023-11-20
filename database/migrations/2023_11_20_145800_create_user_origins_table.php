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
        | Tabela (associativa) de Origens dos usuarios
        | ------------------------
        | nesta tabela vamos armazenar a origem do usuário ao fazer uma requisição
        */
        Schema::create('user_origins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('requested_location_id')->constrained('requested_locations');
            $table->foreignId('request_id')->constrained('requests');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('address_id')->constrained('addresses');
            $table->string('nome', 150)->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_origins');
    }
};
