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
        //createing codeno start
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

           $input_length = strlen($permitted_chars);
            $random_string = '';
            for($i = 0; $i < 5; $i++) {
                $random_character = $permitted_chars[mt_rand(0, $input_length - 1)];
                $random_string .= $random_character;
            }
         
            $codeno="FWU-".$random_string;
            // dd($codeno);
            //createing codeno end

            // getting data from request start
            $data=$request->data;
            $data=json_decode($data);
            // dd($data);

            $fname=$request->firstname;
            $sname=$request->secondname;
            $email=$request->email;
            $phone=$request->phone;
            $dob=$request->birthdate;
            $passport=$request->passport;

            //how many people to ride for total
            $totalpeople=$data->adults + $data->child;//2

            //how costs for total price with seat * people
            $totalseatprice=$data->seat_price * $totalpeople;

            $seat_name=$data->seat_name;
            $seatid=$data->class_seats;

            $mdata=[];

            $sid=$data->toschedule;
            $fid=$data->fromschedule;

            $trip=$data->type;

            if($trip =='oneway'){
                 // dd('oneway');
                 $sdata=Schedule::with(['route','route.fromCity','route.toCity',
                                        'time','flight','flight.airline'])
                    ->findorFail($sid);

                $routeprice=$sdata->route->price;
                $routeprice=$routeprice * $totalpeople;

                $total= $routeprice + $totalseatprice;

                $flight_id=$sdata->flight->id;

                $getSeat=Seat::where('class_flight_id',$seatid)
                           -> where('flight_id',$flight_id) 
                           ->doesntHave('bookings')
                            ->get();

                if(sizeof($getSeat)<= 0 ||sizeof($getSeat) < $totalpeople){
                    
                   return response()->json(['error'=>"Flight with $seat_name is full"]);
                }else{
                    $seatArr=[];
                    for ($i=0; $i <$totalpeople ; $i++) { 

                        $seatArr[$i]=$getSeat[$i]['id'];
                    }


                    
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
                    $booking->codeno=$codeno;
                    $booking->save();
                    
                    foreach ($seatArr as $row) { 
                        $booking->seats()->attach($row);
                    }
                    return response()->json(['success'=>'booking successfully']);
                }
            }else{
                // dd('two');
                    //departure start
                    if($sid!=0){

                     $sdata=Schedule::with(['route','route.fromCity','route.toCity',
                                            'time','flight','flight.airline'])
                        ->findorFail($sid);

                    $routeprice=$sdata->route->price;
                    $routeprice=$routeprice * $totalpeople;

                    $total= $routeprice + $totalseatprice;

                    $flight_id=$sdata->flight->id;

                    $sgetSeat=Seat::where('class_flight_id',$seatid)
                               -> where('flight_id',$flight_id) 
                               ->doesntHave('bookings')
                                ->get();
                                // dd($sgetSeat);

                    if(sizeof($sgetSeat)<= 0 ||sizeof($sgetSeat)<$totalpeople){
                        // dd('full');
                    
                       return response()->json(['error'=>"Flight with $seat_name is full"]);
                        // $mdata['departure']="flight with $seat_name is full now!";
                    }else{
                        // dd('not full');
                        $seatArr=[];
                        for ($i=0; $i <$totalpeople ; $i++) { 

                            $seatArr[$i]=$sgetSeat[$i]['id'];
                        }


                        
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
                        $booking->codeno=$codeno;
                        $booking->save();
                        
                        foreach ($seatArr as $row) { 
                            $booking->seats()->attach($row);
                        }
                        $mdata['departure']="Departure flight booking is successful";
                    }



                    
                    }

                if($fid!=0){
                                 $fdata=Schedule::with(['route','route.fromCity','route.toCity',
                                                        'time','flight','flight.airline'])
                                    ->findorFail($fid);

                                $routeprice=$sdata->route->price;
                                $routeprice=$routeprice * $totalpeople;

                                $total= $routeprice + $totalseatprice;

                                $flight_id=$fdata->flight->id;

                                $fgetSeat=Seat::where('class_flight_id',$seatid)
                                           -> where('flight_id',$flight_id) 
                                           ->doesntHave('bookings')
                                            ->get();

                            if(sizeof($fgetSeat)<= 0 ||sizeof($fgetSeat)<$totalpeople){
                                 return response()->json(['error'=>"Flight with $seat_name is full"]);
                                }else{
                                    $seatArr=[];
                                    for ($i=0; $i <$totalpeople ; $i++) { 

                                        $seatArr[$i]=$fgetSeat[$i]['id'];
                                    }


                                    
                                    $booking = new Booking;
                                   
                                    $booking->fname = $fname;
                                    $booking->sname = $sname;
                                    $booking->email = $email;
                                    $booking->phone = $phone;
                                    $booking->dob = $dob;
                                    $booking->nrc_passport = $passport;
                                    $booking->total_price = $total;
                                    $booking->total_passenger = $totalpeople;
                                    $booking->schedule_id = $fid;
                                    $booking->codeno=$codeno;
                                    $booking->save();
                                    
                                    foreach ($seatArr as $row) { 
                                        $booking->seats()->attach($row);
                                    }
                                    $mdata['ReturnFlight']="Return flight booking is successful";
                                }



                            
                        }


                return response()->json(['success'=>"Flight with $seat_name is full"]);
                }




             // getting data from request end



     
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
