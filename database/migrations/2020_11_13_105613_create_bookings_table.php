<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

            $table->unsignedBigInteger('schedule_id');

            $table->foreign('schedule_id')
                    ->references('id')
                    ->on('schedules')
                    ->onDelete('cascade'); 
                    
            $table->unsignedBigInteger('airline_id');

            $table->foreign('airline_id')
                    ->references('id')
                    ->on('airlines')
                    ->onDelete('cascade'); 


            $table->unsignedBigInteger('seat_id');

            $table->foreign('seat_id')
                    ->references('id')
                    ->on('seats')
                    ->onDelete('cascade'); 

            $table->integer('total_price');
            $table->integer('total_passenger');


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
        Schema::dropIfExists('bookings');
    }
}
