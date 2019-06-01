<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function CarModel()
    {
        return $this->hasMany('App\CarModel');
    }
}
