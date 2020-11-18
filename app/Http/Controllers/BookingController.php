<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Schedule;
use App\Seat;
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
        $pending_orders = Booking::where('status',0)->get();
        $confirmed_orders = Booking::where('status',1)->get();
        
        return view('booking.index', compact('pending_orders', 'confirmed_orders'));
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
       
        $data=$request->data;
        $data=json_decode($data);
        // dd($data);
        $fname=$request->firstname;
        $sname=$request->secondname;
        $email=$request->email;
        $phone=$request->phone;
        $dob=$request->birthdate;
        $passport=$request->passport;
        // echo  $fname;die();
        
        $totalpeople=$data->adults + $data->child;
        $totalseatprice=$data->seat_price * $totalpeople;
        $sid=$data->toschedule;

        $sdata=Schedule::with(['route','route.fromCity','route.toCity','time','flight','flight.airline'])
                ->findorFail($sid);

        $routeprice=$sdata->route->price;
        $routeprice=$routeprice * $totalpeople;

        $total= $routeprice + $totalseatprice;

        $seatid=$data->class_seats;

        $flight_id=$sdata->flight->id;

        $getSeat=Seat::where('class_flight_id',$seatid)
                   -> where('flight_id',$flight_id) 
                   ->doesntHave('bookings')
                    ->get();

                  
// dd($getSeat);
        // $arr=[];
        // foreach ($getSeat as $key => $value) {
        //    $id=
        // }


        $seatArr=[];
        for ($i=0; $i <$totalpeople ; $i++) { 

            $seatArr[$i]=$getSeat[$i]['id'];
        }
        // dd($seatArr);die();


        $booking = new Booking;
       
        $booking->fname = $fname;
        $booking->sname = $sname;
        $booking->email = $email;
        $booking->phone = $phone;
        $booking->dob = $dob;
        $booking->nrc_passport = $passport;
        $booking->total_price = $total;
        $booking->total_passenger = $totalpeople;
        $booking->schedule_id = $sid;
        $booking->save();
        /*  [
                {"id":1,"name":"item one","photo":"path","price":5000,"qty":3},
                {"id":2,"name":"item one","photo":"path","price":6000,"qty":1}
            ]
        */
        foreach ($seatArr as $row) { 
            $booking->seats()->attach($row);
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
        return view('booking.show', compact('booking'));
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
        $booking->delete();
        return back();
    }

    public function previewBooking(){
        return view('frontend.userbookingPreview');
    }

    public function getScheduleUser($id){
        $data=Schedule::with(['route','route.fromCity','route.toCity','time','flight','flight.airline'])
                ->findorFail($id);
        return $data;
    }

   public function confirm($id)
    {
        $booking = Booking::find($id);
        $booking->status = 1;
        $booking->save();
        return back();
    }
}
