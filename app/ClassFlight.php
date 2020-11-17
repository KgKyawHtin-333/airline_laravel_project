<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassFlight extends Model
{
    protected $fillable=['name','price','description'];

    // public function seat(){
    //     return $this->belongsTo('App\Seat');
    // }
}
