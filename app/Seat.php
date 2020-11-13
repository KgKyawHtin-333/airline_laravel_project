<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $fillable=['class_flight_id','airline_id','flight_id'];
}
