<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItineraryRouteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itinerary_route', function (Blueprint $table) {
            $table->unsignedBigInteger('itinerary_id');
            $table->unsignedBigInteger('route_id');
            $table->timestamps();  // Add this line if you want timestamps (created_at and updated_at)
            
            $table->primary(['itinerary_id', 'route_id']);
            $table->index('route_id');
            $table->index('itinerary_id');
            
            $table->foreign('itinerary_id')
                  ->references('itinerary_id')
                  ->on('itineraries')
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
        Schema::dropIfExists('itinerary_route');
    }
}
