<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = ['title','user_id','featured','slug','content','keyword','short_desc','category_id','price','tour_date','tag_id'];

	public function getFeaturedAttribute($featured) //Featured is the name of DATABASE
	{
		return asset($featured);
	}

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
