<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mrpcategory extends Model
{
    public function mrp()
    {
    	return $this->hasMany('App\Mrp');
    }
}
