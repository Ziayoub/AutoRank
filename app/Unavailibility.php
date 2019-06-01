<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unavailibility extends Model
{

    public function car()
    {
        return $this->belongsTo('App\Car');
    }
}
