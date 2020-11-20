<?php

namespace App\Http\Controllers;

use App\Airline;
use Illuminate\Http\Request;

class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airlines=Airline::all();
        return view('airline.index',compact('airlines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('airline.create');
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
            "name"=>"required|min:3",
            "address"=>"required",
            "phoneno"=>"required",
            "photo"=>"required|mimes:jpeg,bmp,png,jpg"
        ]);

        if($request->file()){
            $fileName=time().'_'.$request->photo->getClientOriginalName();
            $filePath=$request->file('photo')->storeAs('airline',$fileName,'public');
            $path='/storage/'.$filePath;
        }
        $airline=new Airline;
        $airline->name=$request->name;
        $airline->address=$request->address;
        $airline->phone_no=$request->phoneno;
        $airline->photo=$path;
        $airline->save();

        return redirect()->route('airline.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function show(Airline $airline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function edit(Airline $airline)
    {
        return view('airline.edit',compact('airline'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Airline $airline)
    {
         $request->validate([
            "name"=>"required|min:3",
            "address"=>"required",
            "phoneno"=>"required",
            "photo"=>"required|mimes:jpeg,bmp,png,jpg"
        ]);

        if($request->file()){
            $fileName=time().'_'.$request->photo->getClientOriginalName();
            $filePath=$request->file('photo')->storeAs('airline',$fileName,'public');
            $path='/storage/'.$filePath;
        }
        $airline=new Airline;
        $airline->name=$request->name;
        $airline->address=$request->address;
        $airline->phone_no=$request->phoneno;
        $airline->photo=$path;
        $airline->save();

        return redirect()->route('airline.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function destroy(Airline $airline)
    {
        $airline->delete();
        return back();
    }
}
