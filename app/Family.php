<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    public function students(){
    	return $this->belongsToMany('App\Student')->withTimestamps();
    }
}
