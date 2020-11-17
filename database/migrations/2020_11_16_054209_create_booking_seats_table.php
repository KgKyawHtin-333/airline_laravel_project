<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingSeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_seats', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('booking_id');
            $table->foreign('booking_id')
            ->references('id')
            ->on('bookings')
            ->onDelete('cascade');

            $table->unsignedBigInteger('seat_id');
           
            $table->foreign('seat_id')
                  ->references('id')
                  ->on('seats')
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
        Schema::dropIfExists('booking_seats');
    }
}
