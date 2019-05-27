<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'phone', 'address', 'city',
        'facebook', 'whatsapp', 'instagram',
        'agency_id', 'model_id'
    ];

    public function moderator()
    {
        return $this->belongsTo('App\User');
    }
}
