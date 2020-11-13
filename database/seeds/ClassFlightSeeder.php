<?php

use Illuminate\Database\Seeder;
use App\ClassFlight;

class ClassFlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       ClassFlight::create([
            'name'=>'Business',
             'description'=>'one way or round trip',
             'price'=>'20000'
            
        ]);
        ClassFlight::create([
            'name'=>'Economy',
             'description'=>'one way or round trip',
             'price'=>'10000'
            
        ]);
    }
}
