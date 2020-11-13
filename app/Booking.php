<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
   protected $fillable=['user_id','schedule_id','airline_id','seat_id','total_price','total_passenger'];
}
