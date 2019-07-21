<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'registration_number', 'production_year',
        'price', 'kilometers', 'seats', 'fuel', 'speed',
        'agency_id', 'model_id'
    ];


    public function agency()
    {
        return $this->belongsTo('App\Agency');
    }

    public function carModel()
    {
        return $this->belongsTo('App\CarModel', 'model_id');
    }

    public function attachments()
    {
        return $this->hasMany('App\Attachment');
    }

    public function unavailabilities()
    {
        return $this->hasMany('App\Unavailability');
    }
}
