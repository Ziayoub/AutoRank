<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function car()
    {
        return $this->hasOne('App\Car');
    }
}