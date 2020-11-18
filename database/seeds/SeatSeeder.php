<?php

use Illuminate\Database\Seeder;
use App\Seat;
class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Seat::create([
        	'name'=>'A1',
        	'class_flight_id'=>'2',
        	'flight_id'=>'1'
        ]);

         Seat::create([
        	'name'=>'A2',
        	'class_flight_id'=>'2',
        	'flight_id'=>'1'
        ]);

          Seat::create([
        	'name'=>'A3',
        	'class_flight_id'=>'2',
        	'flight_id'=>'1'
        ]);

           Seat::create([
        	'name'=>'A4',
        	'class_flight_id'=>'2',
        	'flight_id'=>'1'
        ]);

            Seat::create([
        	'name'=>'A5',
        	'class_flight_id'=>'2',
        	'flight_id'=>'1'
        ]);

        Seat::create([
        	'name'=>'A1',
        	'class_flight_id'=>'1',
        	'flight_id'=>'1'
        ]);

         Seat::create([
        	'name'=>'A2',
        	'class_flight_id'=>'1',
        	'flight_id'=>'1'
        ]);

          Seat::create([
        	'name'=>'A3',
        	'class_flight_id'=>'1',
        	'flight_id'=>'1'
        ]);

           Seat::create([
        	'name'=>'A4',
        	'class_flight_id'=>'1',
        	'flight_id'=>'1'
        ]);

            Seat::create([
        	'name'=>'A5',
        	'class_flight_id'=>'1',
        	'flight_id'=>'1'
        ]);
    }
}
