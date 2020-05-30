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

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment');
    }
}
