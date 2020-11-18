<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
   protected $fillable=['fname','sname','email','phone','dob','nrc_passport','total_price','total_passenger','schedule_id','codeno'];


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

    public function seats()
    {
        return $this->belongsToMany('App\Seat','booking_seats')
        		->withTimestamps();
    }

}
