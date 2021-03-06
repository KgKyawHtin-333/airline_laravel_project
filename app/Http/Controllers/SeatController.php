<?php

namespace App\Http\Controllers;

use App\Seat;
use App\Flight;
use App\ClassFlight;
use Illuminate\Http\Request;
use App\Airline;

class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seats=Seat::all();
        $flights=Flight::all();
        $classFlights=ClassFlight::all();
      
        return view('seat.index',compact('seats','flights','classFlights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $flights=Flight::all();
        $classflights=ClassFlight::all();
        $seats=Seat::all();
        return view('seat.create',compact('flights','seats','classflights'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // dd($request);

         $request->validate([
            "name"=>"required",
            "classflight"=>"required",
            "flight"=>"required",
            
        ]);


          $seat= Seat::create(['name' => $request->name,
                                'class_flight_id' => $request->classflight,
                                'flight_id'=>$request->flight,
                                
          ]);


         $seat->save();
         return Redirect()->route('seat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seat  $seat
     * @return \Illuminate\Http\Response
     */
    public function show(Seat $seat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seat  $seat
     * @return \Illuminate\Http\Response
     */
    public function edit(Seat $seat)
    {
        $airlines=Airline::all();
        $flights=Flight::all();
        $classflights=ClassFlight::all();
      
        return view('seat.edit',compact('airlines','seat','classflights','flights'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seat  $seat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seat $seat)
    {
          // dd($request);

          $request->validate([
            "classflight"=>"required",
            "flight"=>"required",
            "name"=>"required"
          ]);

    
       $seat->class_flight_id=$request->classflight;
       $seat->flight_id=$request->flight;
       $seat->name=$request->name;
       $seat->save();

        return redirect()->route('seat.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seat  $seat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seat $seat)
    {
        $seat->delete();

        return redirect()->route('seat.index');
    }
}
