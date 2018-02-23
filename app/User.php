<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

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

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function categories()
    {
        return $this->hasMany('App\Category');
    }

    public function tags()
    {
        return $this->hasMany('App\Tag');
    }

    public function memebers()
    {
        return $this->hasMany('App\Member');
    }

    public function pages()
    {
        return $this->hasMany('App\Page');
    }
}
