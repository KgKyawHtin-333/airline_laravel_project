<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookingdetails', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('booking_id');

            $table->foreign('booking_id')
                    ->references('id')
                    ->on('bookings')
                    ->onDelete('cascade');

            $table->unsignedBigInteger('schedule_id');

            $table->foreign('schedule_id')
                    ->references('id')
                    ->on('schedules')
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
        Schema::dropIfExists('bookingdetails');
    }
}
