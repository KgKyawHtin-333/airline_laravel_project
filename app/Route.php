<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable=['From_city_id','To_city_id','price'];

    public function fromCity()
    {
       return $this->belongsTo('App\City','From_city_id');
    }
    public function toCity()
    {
       return $this->belongsTo('App\City','To_city_id');
    }
    
}
