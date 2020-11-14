<?php

namespace App\Http\Controllers;

use App\ClassFlight;
use Illuminate\Http\Request;

class ClassFlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classFlights=ClassFlight::all();
        return view('class_flight.index',compact('classFlights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClassFlight  $classFlight
     * @return \Illuminate\Http\Response
     */
    public function show(ClassFlight $classFlight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClassFlight  $classFlight
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassFlight $classFlight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClassFlight  $classFlight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassFlight $classFlight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClassFlight  $classFlight
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassFlight $classFlight)
    {
        //
    }
}
