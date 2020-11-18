<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
   protected $fillable=['user_id','schedule_id','airline_id','seat_id','total_price','total_passenger'];


    public function schedules()
    {
       return $this->belongsToMany('App\Schedule','bookingdetails');
    }

     public function user($value='')
  {
    return $this->belongsTo('App\User');
  }

   public function airline($value='')
  {
    return $this->belongsTo('App\Airline');
  }
}
