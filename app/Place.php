<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $guarded = [];

    public function city()  
    {
        return $this->belongsTo('App\City');
    }
}
