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
        | Tabela de Onibus
        | ------------------------
        | nesta tabela vamos estar armazenando informações de alguns ônibus
        */
        Schema::create('buses', function (Blueprint $table) {
            $table->id();
            $table->string('numeracao', 10)->unique()->nullable(false);
            $table->foreignId('company_id')->constrained('companies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buses');
    }
};
