<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    public function risk()
    {
        return $this->hasMany('App\Risk');
    }
}
