<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pay extends Model
{
    //
    protected $guarded = [];

    public function User(){
        return $this->belongsTo('App\User');
    }
    public function land(){
        return $this->belongsTo('App\land');
    }
}
