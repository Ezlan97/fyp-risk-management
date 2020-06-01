<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mitigation extends Model
{
    public function risk()
    {
        return $this->hasMany('App\Risk');
    }
}
