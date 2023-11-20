<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {       /*
           | ------------------------
           | Tabela de Usuarios
           | ------------------------
           | nesta tabela vão estar os dados dos usuários que se cadastrarem no nosso sistema.
           */
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable(false);
            $table->string('email')->nullable(false)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable(false);;
            $table->foreignId('address_id')->nullable(false)->constrained('addresses');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
