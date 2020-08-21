<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the team that this user is in.
     */
    public function team()
    {
        return $this->belongsTo('App\Team');
        //return $this->belongsTo('App\Team', 'team_id');   <-- use this if your foreign key has a non-laravel name
    }

    /**
     * Get the agency that this user is in.
     */
    public function agency()
    {
        return $this->belongsTo('App\Agency');
        //return $this->belongsTo('App\Agency', 'agency_id');   <-- use this if your foreign key has a non-laravel name
    }
}
