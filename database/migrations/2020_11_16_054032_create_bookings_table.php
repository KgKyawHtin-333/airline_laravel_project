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

            $table->string('fname');
            $table->string('sname');
            $table->string('email');
            $table->string('phone');
            $table->string('dob');
            $table->string('nrc_passport');
            $table->string('total_price');
            $table->string('total_passenger');
            $table->smallInteger('status')->default(0);
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
        Schema::dropIfExists('bookings');
    }
}
