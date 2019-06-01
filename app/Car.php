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

    public function  carModel()
    {
        return $this->hasOne('App\CarModel');
    }

    public function attachments()
    {
        return $this->hasMany('App\Attachment');
    }

    public function unavailability()
    {
        return $this->hasMany('App\Unavailability');
    }
}
