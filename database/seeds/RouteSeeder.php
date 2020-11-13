<?php

use Illuminate\Database\Seeder;
use App\Route;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Route::create([
            'From_city'=>'Yangon',
             'To_city'=>'Kawthaung',
             'price'=>'116,000MMK'
            
        ]);
        Route::create([
            'From_city'=>'Yangon',
             'To_city'=>'Myeik',
             'price'=>'83,000MMK'
            
        ]);
        Route::create([
            'From_city'=>'Yangon',
             'To_city'=>'Dawei',
             'price'=>'72,000MMK'
            
        ]);
        Route::create([
            'From_city'=>'Dawei',
             'To_city'=>'Yangon',
             'price'=>'72,000MMK'
            
        ]);
        Route::create([
            'From_city'=>'Dawei',
             'To_city'=>'Myeik',
             'price'=>'65,000MMK'
            
        ]);
        Route::create([
            'From_city'=>'Dawei',
             'To_city'=>'Kawthaung',
             'price'=>'73,000MMK'
            
        ]);

        Route::create([
            'From_city'=>'Myeik',
             'To_city'=>'Yangon',
             'price'=>'83,000MMK'
            
        ]);
        Route::create([
            'From_city'=>'Myeik',
             'To_city'=>'Dawei',
             'price'=>'55,000MMK'
            
        ]);
        Route::create([
            'From_city'=>'Myeik',
             'To_city'=>'Kawthaung',
             'price'=>'6,5000MMK'
            
        ]);
        Route::create([
            'From_city'=>'Kawthaung',
             'To_city'=>'Yangon',
             'price'=>'116,000MMK'
            
        ]);
        Route::create([
            'From_city'=>'Kawthaung',
             'To_city'=>'Dawei',
             'price'=>'73,000MMK'
            
        ]);
        Route::create([
            'From_city'=>'Kawthaung',
             'To_city'=>'Myeik',
             'price'=>'6,5000MMK'
            
        ]);
        
    }
}
