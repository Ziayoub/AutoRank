<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function carModel()
    {
        return $this->hasMany('App\CarModel');
    }
}
