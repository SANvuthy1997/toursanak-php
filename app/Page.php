<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
	protected $fillable = ['title','user_id','content','keyword','short_desc'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
