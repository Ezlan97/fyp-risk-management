<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mitigation extends Model
{
    public function risk()
    {
        return $this->hasMany('App\Risk');
    }

    public function person_in_charge()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
