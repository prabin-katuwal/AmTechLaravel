<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Mrp extends Model
{
    protected $fillable = ['productname','composition', 'mrpcategory_id', 'packsize', 'mrp'];

	public function getFeaturedAttribute($featured)
	{
		return asset($featured);
	}


    public function mrpcategory()
    {
    	return $this->belongsTo('App\Mrpcategory');
	}
	
}
