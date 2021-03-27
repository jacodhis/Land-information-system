<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    //
       protected $guarded = [];

     public function user(){
        return $this->belonsTo('App\User');
    }
}
