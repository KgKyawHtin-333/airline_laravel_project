<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

         $this->call(AirLineSeeder::class);
         $this->call(TimeSeeder::class);
         $this->call(ClassFlightSeeder::class);
         
         $this->call(CitySeeder::class);


    }
}
