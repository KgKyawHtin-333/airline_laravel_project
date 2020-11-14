<?php

namespace App\Http\Controllers;

use App\Route;
use App\City;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routes=Route::all();
        $cities=City::all();
        return view('route.index',compact('routes','cities'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $routes=Route::all();
        $cities=City::all();
        return view('route.create',compact('routes','cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "From_city"=>"required",
            "To_city"=>"required",
            "price"=>"required"
        ]);


          $route= Route::create(['From_city_id' => $request->From_city,
                                 'To_city_id'=>$request->To_city,
                                  'price' => $request->price
          ]);


         $route->save();
         return Redirect()->route('route.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function show(Route $route)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function edit(Route $route)
    {
      $cities=City::all();
      return view('route.edit',compact('route','cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Route $route)
    {
        $request->validate([
            "From_city"=>"required",
            "To_city"=>"required",
            "price"=>"required"
        ]);

        $route->From_city_id=$request->From_city;
        $route->To_city_id=$request->To_city;
        $route->price=$request->price;
        $route->save();

        return redirect()->route('route.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function destroy(Route $route)
    {
        $route->delete();
        return back();
    }
}
