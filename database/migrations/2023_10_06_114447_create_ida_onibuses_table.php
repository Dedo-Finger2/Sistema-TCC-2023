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
        Schema::create('ida_onibuses', function (Blueprint $table) {
            $table->id('id_ida');
            $table->time('horario')->nullable(false);
            $table->unsignedBigInteger('id_endereco');
            $table->foreign('id_endereco')->references('id_endereco')->on('enderecos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ida_onibuses');
    }
};
