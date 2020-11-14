<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable=['name'];

    public function route(){
        return $this->belongsTo('App\Route');
    }

    
}
