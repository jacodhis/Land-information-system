<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tax extends Model
{
    //
    protected $guarded = [];

    public function lands(){
    	return $this->belongsTo('App\land');
    }
}
