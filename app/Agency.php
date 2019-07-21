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
        'user_id', 'model_id'
    ];


    public function moderator()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function photo() {
        $attachments = $this->attachments()->get();
        if ($attachments->isNotEmpty()) {
            return $attachments->first()->url;
        }
        return 'https://www.hotels.tv/blog/auckland/wp-content/uploads/sites/87/2014/06/car-hire.jpg';
    }

    public function cars()
    {
        return $this->hasMany('App\Car');
    }

    public function attachments()
    {
        return $this->hasMany('App\Attachment');
    }


}
