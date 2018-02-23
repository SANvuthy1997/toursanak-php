<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
	protected $fillable = ['name','position','user_id','description','facebook','linkedin','twitter','position','photo'];

	public function getPhotoAttribute($photo) //Featured is the name of DATABASE
	{
		return asset($photo);
	}

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
