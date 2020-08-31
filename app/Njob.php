<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Njob extends Model
{
    protected $fillable = ['title','featured',];

	public function getFeaturedAttribute($featured)
	{
		return asset($featured);
	}
}
