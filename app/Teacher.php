<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['title', 'position' ,'featured'];

    public function getFeaturedAttribute($featured)
	{
		return asset($featured);
	}
}
