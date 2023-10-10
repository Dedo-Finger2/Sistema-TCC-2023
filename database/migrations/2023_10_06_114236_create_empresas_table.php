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
        Schema::create('empresas', function (Blueprint $table) {
                        /*
            | ------------------------
            | Tabela de Empresa
            | ------------------------
            | nesta tabela vamos estar guardando dados sobre as empresa que vão usar o sistema.
            | essa tabela também é usada como referência das empresas dos próprios ônibus.
            | as empresas serão como administradores no nosso sistema, são eles que vão acessar o Painel de Controle
            */
            $table->id('id_empresa'); // ID

            $table->String('nome', 100)->nullable(false);  // Nome da empresa
            $table->String('email', 250)->nullable(false); // E-mail da empresa
            $table->String('cnpj', 20)->nullable(false);   // CNPJ da empresa
            $table->String('senha', 8)->nullable(false);   // Senha da empresa
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
