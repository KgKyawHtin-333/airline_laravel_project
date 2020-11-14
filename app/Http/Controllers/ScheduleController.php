<?php

namespace App\Http\Controllers;

use App\Schedule;
use App\Route;
use App\Flight;
use App\Time;
use App\Airline;
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
        return view('schedule.create',compact('schedules','routes','airlines','flights','times'));
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
            "flight_name"=>"required",
            "time" =>"required"
        ]);

            $schedule= Schedule::create(['route_id' => $request->From_city, $request->To_city,
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        //
    }
}
