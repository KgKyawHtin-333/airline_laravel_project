<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\ClassFlight;
use App\Schedule;
use App\Route;

class FrontendController extends Controller
{
    public function home($value=''){
        $cities = City::all();
        $classes=ClassFlight::all();
    	return view('frontend.mainpage', compact('cities','classes'));
    }


    public function login($value=''){
    	return view('frontend.login_page');
    }


    public function signup($value=''){
    	return view('frontend.signup_page');
    }


    public function register_page($value=''){
    	return view('frontend.register_page');
    }
    public function flightSearch(Request $request,City $city){
      
        //dd($request);
        $From_city =$request->Fromcity;
        $To_city=$request->Tocity;
        $departureDate=$request->start;
        $departureDate = date("Y-m-d", strtotime($departureDate));  
        //dd($departureDate);
        $adults=$request->adult;
        $child=$request->child;
        $class=$request->class;

        $data=Schedule::with('route')
    ->whereHas('route',function($q) use ($From_city,$To_city){
        $q->where('From_city_id','=',$From_city)
            ->where('To_city_id','=',$To_city);
    })->where('date',$departureDate)->get();
       // dd($data);
       // $routes=Route::all();
        return view('frontend.flightSearch',compact('data')); 
    }
}
