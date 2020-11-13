<?php

use Illuminate\Database\Seeder;
use App\Airline;

class AirLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Airline::create([
            'name'=>'Air KBZ',
             'address'=>'Yangon',
             'phone_no'=>'09773245631',
             'photo'=>'flight/1.jpg'
        ]);
        Airline::create([
            'name'=>'Myanmar National AirLine',
             'address'=>'Yangon',
             'phone_no'=>'0987654321',
             'photo'=>'flight/2.jpg'
        ]);
        Airline::create([
            'name'=>'Golden Myanmar AirLine',
             'address'=>'Yangon',
             'phone_no'=>'09778908765',
             'photo'=>'flight/3.jpg'
        ]);
    }
}
