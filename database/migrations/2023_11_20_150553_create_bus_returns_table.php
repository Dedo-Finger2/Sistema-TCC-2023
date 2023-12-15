<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusReturnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_returns', function (Blueprint $table) {
            $table->id('return_id');
            $table->unsignedBigInteger('address_id');
            $table->time('schedule');
            $table->timestamps();  // Add this line if you want timestamps (created_at and updated_at)
            
            $table->index('address_id');
            
            $table->foreign('address_id')
                  ->references('address_id')
                  ->on('addresses')
                  ->onDelete('NO ACTION')
                  ->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_returns');
    }
}
