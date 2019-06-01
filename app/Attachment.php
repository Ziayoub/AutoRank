<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    public function agency()
    {
        return $this->belongsTo('App\Agency');
    }

    public function car()
    {
        return $this->belongsTo('App\Car');
    }

}
