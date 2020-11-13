<?php

use Illuminate\Database\Seeder;
use App\Time;

class TimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Time::create([
            'name'=>'06:45 AM - 08:50 AM'
             
        ]);
        Time::create([
            'name'=>'07:00 AM - 08:35 AM'
             
        ]);
        Time::create([
            'name'=>'08:00 AM - 10:10 AM'
             
        ]);

        Time::create([
            'name'=>'10:00 AM - 12:05 PM'
             
        ]);
        Time::create([
            'name'=>'12:30 PM - 03:15 PM'
             
        ]);


    }
}
