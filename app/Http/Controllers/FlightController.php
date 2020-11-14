<?php

namespace App\Http\Controllers;

use App\Flight;
use Illuminate\Http\Request;
use App\Airline;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flights=Flight::all();
        $airlines=Airline::all();
        return view('flight.index',compact('flights','airlines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $airlines=Airline::all();
        return view('flight.create',compact('airlines'));
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
            "total_seat"=>"required",
            "airline"=>"required"
        ]);


          $flight= Flight::create(['name' => $request->name,
                                 'total_seats'=>$request->total_seat,
                                  'airline_id' => $request->airline
          ]);


         $flight->save();
         return Redirect()->route('flight.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function show(Flight $flight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function edit(Flight $flight)
    {
        $airlines=Airline::all();
        return view('flight.edit',compact('flight','airlines'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flight $flight)
    {
      //dd($request);
        $request->validate([
            "name"=>"required",
            "total_seat"=>"required",
            "airline"=>"required"
        ]);

    
    $flight->name=$request->name;
    $flight->total_seats=$request->total_seat;
    $flight->airline_id=$request->airline;
    $flight->save();

    return redirect()->route('flight.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flight $flight)
    {
        $flight->delete();

        return back();
    }
}
