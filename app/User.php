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

    public function isAdmin()
    {
        if ($this->level == 1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function isOperator()
    {
        if ($this->level == 2)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function scopeAdmin($query)
    {
        return $query->where('level', 1)->get();
    }

    public function scopeOperator($query)
    {
        return $query->where('level', 2)->get();
    }

    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    public function risk()
    {
        return $this->hasOne('App\Risk');
    }
}
