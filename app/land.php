<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class land extends Model
{
    //
    protected $guarded = [];

    public function owner(){
    	return $this->belongsTo('App\owner');
    }


    public function taxes(){
    	return $this->hasMany('App\tax');
    }

    public function leases(){
    	return $this->hasMany('App\lease');
    }

    public function payments(){
        return $this->hasMany('App\pay');
    }
}
