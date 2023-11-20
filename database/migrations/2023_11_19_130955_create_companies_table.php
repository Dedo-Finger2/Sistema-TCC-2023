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
        | Tabela de Empresa
        | ------------------------
        | nesta tabela vamos estar guardando dados sobre as empresa que vão usar o sistema.
        | essa tabela também é usada como referência das empresas dos próprios ônibus.
        | as empresas serão como administradores no nosso sistema, são eles que vão acessar o Painel de Controle
        */
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable(false);
            $table->string('email')->nullable(false)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable(false);;
            $table->string('cnpj')->nullable(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
