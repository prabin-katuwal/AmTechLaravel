<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inuiry extends Model
{
    protected $fillable = ['name','lname','email', 'phone', 'msg','service' ];
}
