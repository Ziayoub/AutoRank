<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $table = 'models';

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }
}
