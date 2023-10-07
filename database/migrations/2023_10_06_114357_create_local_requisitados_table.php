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
        Schema::create('locais_requisitados', function (Blueprint $table) {
            $table->id('id_local');

            $table->string('nome', 45)->nullable(false);
            $table->unsignedBigInteger('id_endereco');

            $table->foreign('id_endereco')->references('id_endereco')->on('enderecos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('local_requisitados');
    }
};
