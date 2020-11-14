<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home($value=''){
    	return view('frontend.mainpage');
    }


     public function login($value=''){
    	return view('frontend.login_page');
    }


     public function signup($value=''){
    	return view('frontend.signup_page');
    }
}
