<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['productname','composition', 'pcategory_id', 'packsize', 'dosage'];

	public function getFeaturedAttribute($featured)
	{
		return asset($featured);
	}


    public function pcategory()
    {
    	return $this->belongsTo('App\Pcategory');
    }
}
