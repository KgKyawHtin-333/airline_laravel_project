<?php

namespace App\Http\Controllers;

use App\Schedule;
use App\Route;
use App\Flight;
use App\Time;
use App\Airline;
use App\City;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules=Schedule::all();
        $routes=Route::all();
        $flights=Flight::all();
        $times=Time::all();
        return view('schedule.index',compact('schedules','routes','flights','times'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schedules=Schedule::all();
        $routes=Route::all();
        $airlines=Airline::all();
        $flights=Flight::all();
        $times=Time::all();
        $cities=City::all();
        return view('schedule.create',compact('schedules','routes','airlines','flights','times','cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            "route"=>"required",
            "flight_name"=>"required",
            "time" =>"required"
        ]);

            $schedule= Schedule::create(['route_id' => $request->route, 
                                        'flight_id'=>$request->flight_name,
                                        'time_id' => $request->time
        ]);
        $schedule->save();
         return Redirect()->route('schedule.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        $routes=Route::all();
        $flights=Flight::all();
        $times=Time::all();
        return view('schedule.edit',compact('schedule','routes','flights','times'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        $request->validate([
            "route"=>"required",
            "flight_name"=>"required",
            "time" =>"required"
        ]);
        $schedule->route_id=$request->route;
        $schedule->flight_id=$request->flight_name;
        $schedule->time_id=$request->time;
        $schedule->save();
 
         return redirect()->route('schedule.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return back();
    }
}
