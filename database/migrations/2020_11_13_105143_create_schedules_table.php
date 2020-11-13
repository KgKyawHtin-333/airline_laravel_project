<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('route_id');

            $table->foreign('route_id')
                    ->references('id')
                    ->on('routes')
                    ->onDelete('cascade');

            $table->unsignedBigInteger('time_id');

            $table->foreign('time_id')
                    ->references('id')
                    ->on('times')
                    ->onDelete('cascade'); 
                    
            $table->unsignedBigInteger('flight_id');

            $table->foreign('flight_id')
                    ->references('id')
                    ->on('flights')
                    ->onDelete('cascade'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
