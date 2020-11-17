<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable=['date','route_id','time_id','flight_id'];

    public function route(){
        return $this->belongsTo('App\Route');

    }
    public function flight(){
        return $this->belongsTo('App\Flight');
    }
    public function time(){
        return $this->belongsTo('App\Time');
    }
    public function airline(){
        return $this->belongsTo('App\Airline');
    }

    public function bookings()
    {
       return $this->belongsToMany('App\Booking', 'bookingdetails');
    }
    
}
