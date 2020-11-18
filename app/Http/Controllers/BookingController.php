<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Schedule;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $pending_orders = Booking::all();
        // $confirmed_orders = Booking::where('status',1)->get();
        
        return view('booking.index', compact('pending_orders'));
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
        // dd($request);

        // validation

        // data store
        $mybooking = json_decode($request->booking);
        $schedule = $mybooking->toschedule;
        $orderdate = date('Y-m-d');
        $totalamount = 0;
        $totalpassenger = 0;
        foreach ($mybooking as $row) {
            $totalamount += $row->price;
            $totalpassenger += $row->adult;
        }
        $booking = new Booking;
       
        $booking->schedule_id = $schedule;
        $booking->total_price = $totalamount;
        $booking->total_passenger = $totalpassenger;
        $booking->user_id = Auth::id(); // current logined user_id
        $booking->save();
        /*  [
                {"id":1,"name":"item one","photo":"path","price":5000,"qty":3},
                {"id":2,"name":"item one","photo":"path","price":6000,"qty":1}
            ]
        */
        foreach ($mybooking as $row) { 
            $booking->schedules()->attach($row->id);
        }

        return 'Successful Order';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }

    public function previewBooking(){
        return view('frontend.userbookingPreview');
    }

    public function getScheduleUser($id){
        $data=Schedule::with(['route','route.fromCity','route.toCity','time','flight','flight.airline'])
                ->findorFail($id);
        return $data;
    }
}
