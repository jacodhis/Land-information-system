<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lease extends Model
{
    //
     protected $guarded = [];

    public function land(){
    	return $this->belongsTo('App\land');
    }
}
