<?php

use Illuminate\Database\Seeder;
use App\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'name'=>'Yangon',
             
        ]);
        City::create([
            'name'=>'Dawei',
             
        ]);
        City::create([
            'name'=>'Myeik',
             
        ]);
        City::create([
            'name'=>'Kawthaung',
             
        ]);
    }
}
