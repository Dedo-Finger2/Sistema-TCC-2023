<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRouteReturnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_returns', function (Blueprint $table) {
            $table->unsignedBigInteger('bus_return_id');
            $table->unsignedBigInteger('route_id');
            $table->timestamps();  // Add this line if you want timestamps (created_at and updated_at)
            
            $table->primary(['bus_return_id', 'route_id']);
            $table->index('route_id');
            $table->index('bus_return_id');
            
            $table->foreign('bus_return_id')
                  ->references('return_id')
                  ->on('bus_returns')
                  ->onDelete('NO ACTION')
                  ->onUpdate('NO ACTION');
            
            $table->foreign('route_id')
                  ->references('route_id')
                  ->on('routes')
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
        Schema::dropIfExists('route_returns');
    }
}
