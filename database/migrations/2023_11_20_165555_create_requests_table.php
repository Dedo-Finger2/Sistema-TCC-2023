<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('requested_location_id');
            $table->unsignedBigInteger('requested_origin_id');
            $table->dateTime('datetime');
            $table->unsignedBigInteger('feedback_id');
            $table->timestamps();  // Add this line if you want timestamps (created_at and updated_at)
            
            $table->primary(['user_id', 'requested_location_id', 'requested_origin_id']);
            $table->index('requested_location_id');
            $table->index('user_id');
            $table->index('feedback_id');
            $table->index('requested_origin_id');
            
            $table->foreign('user_id')
                  ->references('user_id')
                  ->on('users')
                  ->onDelete('NO ACTION')
                  ->onUpdate('NO ACTION');
            
            $table->foreign('requested_location_id')
                  ->references('requested_location_id')
                  ->on('requested_locations')
                  ->onDelete('NO ACTION')
                  ->onUpdate('NO ACTION');
            
            $table->foreign('feedback_id')
                  ->references('feedback_id')
                  ->on('feedbacks')
                  ->onDelete('NO ACTION')
                  ->onUpdate('NO ACTION');
            
            $table->foreign('requested_origin_id')
                  ->references('requested_origin_id')
                  ->on('requested_origins')
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
        Schema::dropIfExists('requests');
    }
}
