<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('class_flight_id');

            $table->foreign('class_flight_id')
                    ->references('id')
                    ->on('class_flights')
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
        Schema::dropIfExists('seats');
    }
}
