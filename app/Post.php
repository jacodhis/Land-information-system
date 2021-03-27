<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     protected $guarded = [];
     // //table name
     // protected $table = 'posts';
     // //primary key 
     // public $primarykey = 'id';
     // //timestamps
     // public $timestamps = true;
     public function user(){
          return $this->belongsTo('App\User');
     }
      public function comments(){
          return $this->morphMany(comment::class,'commentable');
     }
}
