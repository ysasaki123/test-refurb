<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //

    /**
     * Get the users in this team.
     */
    public function users()
    {
        return $this->hasMany('App\User');
        //return $this->hasMany('App\User', 'team_id');   <-- use this if your foreign key has a non-laravel name
    }

    /**
     * Get the parent team.
     */
    public function parent()
    {
        return $this->belongsTo('App\Team', 'parent_team_id');
    }

    /**
     * Get the child teams.
     */
    public function children()
    {
        return $this->hasMany('App\Team', 'parent_team_id');
    }
}
