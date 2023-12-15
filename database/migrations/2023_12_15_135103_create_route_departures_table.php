<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRouteDeparturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_departures', function (Blueprint $table) {
            $table->unsignedBigInteger('bus_trip_id');
            $table->unsignedBigInteger('route_id');
            $table->timestamps();  // Add this line if you want timestamps (created_at and updated_at)
            
            $table->primary(['bus_trip_id', 'route_id']);
            $table->index('route_id');
            $table->index('bus_trip_id');
            
            $table->foreign('bus_trip_id')
                  ->references('trip_id')
                  ->on('bus_trips')
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
        Schema::dropIfExists('route_departures');
    }
}
