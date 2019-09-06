<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function jobsList(){
    	return $this->hasMany('App\Jobs');
    }
    public function getRouteKeyName(){
    	return 'slug';
    }
}
