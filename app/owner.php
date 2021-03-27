<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class owner extends Model
{
    //
    protected $guarded = [];

    public function lands(){
    	return $this->hasMany('App\land');
    }
}
