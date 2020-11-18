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
        //
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
       //aco editing
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
        //how many people to ride for total
        $totalpeople=$data->adults + $data->child;//2

        //how costs for total price with seat * people
        $totalseatprice=$data->seat_price * $totalpeople;

        $sid=$data->toschedule;

        $sdata=Schedule::with(['route','route.fromCity','route.toCity','time',
                            'flight','flight.airline'])
                ->findorFail($sid);

        $routeprice=$sdata->route->price;// 80000 from Y to D

        //cost for total cost with route * totalpeople
        $routeprice=$routeprice * $totalpeople;

        $total= $routeprice + $totalseatprice;// total 200000

        $seatid=$data->class_seats;

        $flight_id=$sdata->flight->id;

        $getSeat=Seat::where('class_flight_id',$seatid)
                   -> where('flight_id',$flight_id) 
                   ->doesntHave('bookings')
                    ->get();
                    
                    //[8,9,10];
                  
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
