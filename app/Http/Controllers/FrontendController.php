<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class FrontendController extends Controller
{
    public function home($value=''){
        $cities = City::all();
    	return view('frontend.mainpage', compact('cities'));
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
}
