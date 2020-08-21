<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    //

    /**
     * Get the users in this agency.
     */
    public function users()
    {
        return $this->hasMany('App\User');
        //return $this->hasMany('App\User', 'agency_id');   <-- use this if your foreign key has a non-laravel name
    }
}
