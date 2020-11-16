<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\ClassFlight;
use App\Schedule;

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
    public function flightSearch($value=''){
        $myschedule=Schedule::all();
        return view('frontend.flightSearch',compact('myschedule'));

    }
}
