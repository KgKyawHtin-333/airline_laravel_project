<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->id();

            $table->string('price');

            $table->unsignedBigInteger('From_city_id');
            $table->foreign('From_city_id')
            ->references('id')
            ->on('cities')
            ->onDelete('cascade');

            $table->unsignedBigInteger('To_city_id');
            $table->foreign('To_city_id')
            ->references('id')
            ->on('cities')
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
        Schema::dropIfExists('routes');
    }
}
