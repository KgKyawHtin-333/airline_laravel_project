<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
   protected $fillable=['name','total_seats','airline_id'];

   public function airline()
   {
      return $this->belongsTo('App\Airline');
   }
}
