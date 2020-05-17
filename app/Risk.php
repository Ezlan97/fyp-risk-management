<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Risk extends Model
{
    public function scopeOwner($query)
    {
        return $query->where('user_id', Auth::user()->id);
    }
}
