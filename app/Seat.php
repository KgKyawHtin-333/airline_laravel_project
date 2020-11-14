<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $fillable=['class_flight_id','airline_id','flight_id'];

    public function classFlight(){
        return $this->belongsTo('App\ClassFlight');
    }
    public function flight(){
        return $this->belongsTo('App\Flight');
    }
    public function airline(){
        return $this->belongsTo('App\Airline');
    }
}
